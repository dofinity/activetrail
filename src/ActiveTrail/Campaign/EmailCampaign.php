<?php

namespace ActiveTrail\Campaign;

use ActiveTrail\Api\Campaign\ApiABSettings;
use ActiveTrail\Api\Campaign\ApiCampaignContactPost;
use ActiveTrail\Api\Campaign\ApiCampaignDesign;
use ActiveTrail\Api\Campaign\ApiCampaignDetails;
use ActiveTrail\Api\Campaign\ApiCampaignTemplate;
use ActiveTrail\Api\Campaign\ApiCampaignUpdateContainer;
use ActiveTrail\Api\Contact\PostContactContainer;
use ActiveTrail\Api\Contact\ApiCampaignContact;
use ActiveTrail\Api\Ecommerce\ApiEcommerceDataList;
use ActiveTrail\EmailCampaignInterface;
use ActiveTrail\Exception\ContactIdNotFoundException;
use ActiveTrail\Rest\EndPoints;
use ActiveTrail\CampaignBase;
use GuzzleHttp\Psr7\Response;

/**
 * Class EmailCampaign
 * @package ActiveTrail\Campaign
 */
class EmailCampaign extends CampaignBase implements EmailCampaignInterface {

  protected $campaignPayload;

  /**
   * EmailCampaign constructor.
   * @param $apiToken
   */
  public function __construct($apiToken) {
    parent::__construct($apiToken, EndPoints::$CAMPAIGNS_CONTACTS);
    // Initialize payload structure
    $updateContainer = new ApiCampaignUpdateContainer('', new ApiCampaignDetails(), new ApiCampaignDesign(),
      new ApiCampaignTemplate(), new ApiABSettings(), new ApiEcommerceDataList(), []);
    $this->campaignPayload = new ApiCampaignContactPost($updateContainer, new ApiCampaignContact());
  }

  public function setSubject ($subject) {
    $this->getDetails()->subject = $subject;
    return $this;
  }

  public function setPreHeader ($preHeader) {
    // TODO: Implement setPreHeader() method.
    return $this;
  }

  /**
   * @param mixed $content
   * @return static
   */
  public function setContent($content) {
    $this->getCampaign()->campaign->design->content = $content;
    return $this;
  }

  public function addContacts($emails) {
    $contact_ids = [];
    // Get all contact ids from ActiveTrail
    foreach ($emails as $key => $email) {
      /* @var EmailCampaignInterface $client */
      $id = $this->getContactId($email);
      if (!empty($id)) {
        $contact_ids[] = $id;
      }
      else {
        throw new ContactIdNotFoundException();
      }
    }
    $this->campaignPayload->campaign_contacts->setContactsEmails($emails);
    $this->campaignPayload->campaign_contacts->setContactsIds($contact_ids);
    return $this;
  }

  /**
   * Get an existing contact Id, or create a new contact and returns its Id.
   * @param $email
   */
  public function getContactId($email) {
    $contact = new PostContactContainer();
    $contact->email = $email;
    $response = $this->createContact($contact);
    /* @var Response $response */
    $decoded_response = $this->getDecodedJsonResponse($response);
    return !empty($decoded_response->id) ? $decoded_response->id : null;
  }

  /**
   * Create and return a new contact (or existing one if already exists)
   *
   * @param \ActiveTrail\Api\Contact\PostContactContainer $contact
   * @return string
   */
  public function createContact(PostContactContainer $contact) {
    //Make the Api Call.
    return $this->client->MakeActiveTrailApiCall(
      EndPoints::$CONTACTS['uri'],
      EndPoints::$CONTACTS['method'],
      $contact
    );
  }

  public function getMyTemplates() {
    return $this->client->MakeActiveTrailApiCall(
      EndPoints::$TEMPLATES['uri'],
      EndPoints::$TEMPLATES['method']
    );
  }

  /**
   * {@inheritdoc}
   */
  protected function getCampaign() {
    return $this->campaignPayload;
  }

  /**
   * {@inheritdoc}
   */
  public function getDetails() {
    return $this->getCampaign()->campaign->details;
  }

  /**
   * {@inheritdoc}
   */
  public function getCampaignScheduling() {
    return $this->getCampaign()->campaign->a_b_settings->scheduling;
  }

  /**
   * {@inheritdoc}
   */
  public function setSendNow($send_now = TRUE) {
    $this->getCampaignScheduling()->send_now = $send_now;
    return $this;
  }

  /**
   * Sets the template Id, retreives the subject from the campaign details,
   * and un-sets the content.
   *
   * @todo: Check with ActiveTrial why the template's subject is not automatically derived from the template (currently it is required)
   * @todo: Check with ActiveTrail why the fromme and frommail, set in the template settings via the UI, do not affect the From: and Reply-To: headers, or how these can be set via the API.
   * @param $template_id
   */
  public function setTemplate ($template_id) {

    // Fetch template details
    /* @var \ActiveTrail\Api\Campaign\ApiCampaignTemplateBase $template_details */
    $template_details = $this->getTemplateDetails($template_id);
    // Set template Id
    $this->getCampaign()->campaign->template->id = (int)$template_id;
    // Override email details according to template details
    if (!empty($template_details->mail_subject)) {
      $this->getCampaign()->campaign->details->subject = $template_details->mail_subject;
    }
    // Make sure content (otherwise it overrides the template)
    $this->setContent(NULL);
  }

  public function getTemplateDetails($template_id) {
    $template_details = $this->client->MakeActiveTrailApiCall(
      EndPoints::$TEMPLATE_DETAILS['uri'],
      EndPoints::$TEMPLATE_DETAILS['method'],
      null,
      ['id' => $template_id]
    );
    return $this->getDecodedJsonResponse($template_details);
  }

  /**
   * Helper function to extract the guzzle response and decode it.
   * @param \GuzzleHttp\Psr7\Response $response
   * @return mixed
   */
  private function getDecodedJsonResponse(Response $response) {
    return json_decode($response->getBody()->getContents());
  }
}
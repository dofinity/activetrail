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
        // @todo: throw an exception
      }
    }
    $this->campaignPayload->campaign_contacts->setContactsEmails($emails);
    $this->campaignPayload->campaign_contacts->setContactsIds($contact_ids);
    return $this;
  }

  /**
   * @param $email
   */
  public function getContactId($email) {
    $contact = new PostContactContainer();
    $contact->email = $email;
    $response = $this->createContact($contact);
    /* @var Response $response */
    $json_response = json_decode($response->getBody()->getContents());
    return !empty($json_response->id) ? $json_response->id : null;
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

}
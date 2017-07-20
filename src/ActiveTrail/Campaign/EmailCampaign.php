<?php

namespace ActiveTrail\Campaign;

use ActiveTrail\Api\Campaign\ApiCampaignContactPost;
use ActiveTrail\Api\Campaign\ApiCampaignDetails;
use ActiveTrail\Api\Campaign\ApiCampaignPost;
use ActiveTrail\Api\Campaign\ApiCampaignScheduling;
use ActiveTrail\Api\Campaign\ApiCampaignUpdateContainer;
use ActiveTrail\Api\Contact\PostContactContainer;
use ActiveTrail\Api\Contact\ApiCampaignContact;
use ActiveTrail\Api\Ecommerce\ApiEcommerceDataList;
use ActiveTrail\EmailCampaignInterface;
use ActiveTrail\Rest\EndPoints;
use ActiveTrail\CampaignBase;

/**
 * Class EmailCampaign
 * @package ActiveTrail\Campaign
 */
class EmailCampaign extends CampaignBase implements EmailCampaignInterface {

  /**
   * EmailCampaign constructor.
   * @param $apiToken
   */
  public function __construct($apiToken) {
    parent::__construct($apiToken, EndPoints::$CAMPAIGNS);
  }

  /**
   * {@inheritdoc}
   */
  protected function getCampaign() {
    // TODO: Implement getCampaign() method.
    return NULL;
  }

  /**
   * Create and Send a new campaign To specific contacts
   *
   * @param \ActiveTrail\Api\Campaign\ApiCampaignContactPost $payload
   */
  public function SendNewCampaignToContacts(ApiCampaignContactPost $payload) {

    //Make the Api Call.
    return $this->client->MakeActiveTrailApiCall(
      EndPoints::$CAMPAIGNS_CONTACTS['uri'],
      EndPoints::$CAMPAIGNS_CONTACTS['method'],
      $payload
    );

  }

  public function GetMyTemplates() {
    return $this->client->MakeActiveTrailApiCall(
      EndPoints::$CAMPAIGNS_CONTACTS['uri'],
      EndPoints::$CAMPAIGNS_CONTACTS['method']
    );
  }

  /**
   * Create and return a new contact (or existing one if already exists)
   *
   * @param \ActiveTrail\Api\Contact\PostContactContainer $contact
   * @return string
   */
  public function CreateContact(PostContactContainer $contact) {
    //Make the Api Call.
    return $this->client->MakeActiveTrailApiCall(
      EndPoints::$CONTACTS['uri'],
      EndPoints::$CONTACTS['method'],
      $contact
    );
  }

  /**
   * Get payload for creating / updating contacts
   *
   * @param $email
   * @return \ActiveTrail\Api\Contact\PostContactContainer
   */
  public function getPostContactContainer($email) {
    return new PostContactContainer($email);
  }


  /**
   * Get payload for creating and sending a new campaign to provided contacts
   *
   * @param $name
   * @param $subject
   * @param array $contact_ids
   * @param array $to_emails
   * @param null $send_test
   * @return \ActiveTrail\Api\Campaign\ApiCampaignContactPost
   */
  public function getApiCampaignContactPost($name, $subject, array $contact_ids, array $to_emails, $send_test = null) {

    // Create the campagin details
    $campaign_details = new ApiCampaignDetails($name, $subject);
    // Create a campaign based on above details
    $campaign = new ApiCampaignUpdateContainer($campaign_details, $send_test);
    // Create structure with contacts
    $campaign_contacts = new ApiCampaignContact($contact_ids, $to_emails);
    // Create and return the full campaign payload
    return new ApiCampaignContactPost($campaign, $campaign_contacts);

  }
}
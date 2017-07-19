<?php
/**
 * @file ActiveTrail main API class, allow to create and send campaigns, get and set templates.
 */
namespace ActiveTrail;
use ActiveTrail\Api\Campaign\ApiCampaignContactPost;
use ActiveTrail\Api\Contact\PostContactContainer;
use ActiveTrail\Rest\EndPoints;
use ActiveTrail\Rest\HttpClient;


class ActiveTrailApi implements ActiveTrailApiInterface {

  use ActiveTrailRequestBuilder;
  
  private $client;

  /**
   * ActiveTrailApi constructor.
   * @param $apiToken
   */
  public function __construct($apiToken) {
    $this->client = new HttpClient($apiToken);
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


  public function CreateNewCampaign() {
    // TODO: Implement CreateNewCampaign() method.
  }

  public function CreateSMSCampaign() {
    // TODO: Implement CreateSMSCampaign() method.
  }

  public function GetMyTemplates() {
    // TODO: Implement GetMyTemplates() method.
  }

  /**
   * Create and return a new contact (or existing one if already exists)
   *
   * @param \ActiveTrail\Api\Contact\PostContactContainer $contact
   */
  public function CreateContact(PostContactContainer $contact) {
    //Make the Api Call.
    return $this->client->MakeActiveTrailApiCall(
      EndPoints::$CONTACTS['uri'],
      EndPoints::$CONTACTS['method'],
      $contact
    );
  }


}

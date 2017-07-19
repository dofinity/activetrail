<?php

namespace ActiveTrail;


use ActiveTrail\Api\Campaign\ApiCampaignContactPost;
use ActiveTrail\Api\Campaign\ApiCampaignDetails;
use ActiveTrail\Api\Campaign\ApiCampaignUpdateContainer;
use ActiveTrail\Api\Contact\ApiCampaignContact;
use ActiveTrail\Api\Contact\PostContactContainer;

trait ActiveTrailRequestBuilder {

  protected $payload;

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
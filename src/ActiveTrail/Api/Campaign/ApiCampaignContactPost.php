<?php

namespace ActiveTrail\Api\Campaign;

use ActiveTrail\Api\Contact\ApiCampaignContact;

/**
 * Class ApiCampaignContactPost
 *
 * CREATE AND SEND A NEW CAMPAIGN TO SPECIFIC CONTACTS
 *
 * @package ActiveTrail\Api\Campaign
 */
class ApiCampaignContactPost {

  private $campaign; //ApiCampaignUpdateContainer
  private $campaign_contacts; //ApiCampaignContact

  /**
   * ApiCampaignContactPost constructor.
   * @param $campaign
   * @param $campaign_contacts
   */
  public function __construct(ApiCampaignUpdateContainer $campaign = null, ApiCampaignContact $campaign_contacts = null) {
    $this->campaign = $campaign;
    $this->campaign_contacts = $campaign_contacts;
  }

}


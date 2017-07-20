<?php

namespace ActiveTrail\Api\Campaign;

use ActiveTrail\Api\Contact\ApiCampaignContact;
use ActiveTrail\JsonSerializableStruct;

/**
 * Class ApiCampaignContactPost
 *
 * Create and send a new campaign to specific contacts
 *
 * @package ActiveTrail\Api\Campaign
 */
class ApiCampaignContactPost extends JsonSerializableStruct {

  /**
   * @var ApiCampaignUpdateContainer
   */
  public $campaign;

  /**
   * @var ApiCampaignContact
   */
  public $campaign_contacts;

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


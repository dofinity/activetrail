<?php

namespace ActiveTrail\Api\SmsCampaign;

use ActiveTrail\JsonSerializableStruct;

class ApiSmsCampaignPostContainer extends JsonSerializableStruct {

  /**
   * @var \ActiveTrail\Api\SmsCampaign\ApiSMSCampaignDetails
   */
  public $details; //Details

  /**
   * @var \ActiveTrail\Api\SmsCampaign\ApiSmsCampaignScheduling
   */
  public $scheduling; //Scheduling

  /**
   * @var \ActiveTrail\Api\SmsCampaign\ApiSMSMobile[]
   */
  public $mobiles; //array(ApiSMSMobile)

  /**
   * ApiSmsCampaignPostContainer constructor.
   * @param \ActiveTrail\Api\SmsCampaign\ApiSMSCampaignDetails $details
   * @param \ActiveTrail\Api\SmsCampaign\ApiSmsCampaignScheduling $scheduling
   * @param \ActiveTrail\Api\SmsCampaign\ApiSMSMobile[] $mobiles
   */
  public function __construct (ApiSMSCampaignDetails $details, ApiSmsCampaignScheduling $scheduling, array $mobiles) {
    $this->details = $details;
    $this->scheduling = $scheduling;
    $this->mobiles = $mobiles;
  }

}

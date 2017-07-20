<?php

namespace ActiveTrail\Api\SmsCampaign;

use ActiveTrail\JsonSerializableStruct;

class ApiSmsCampaignPostContainer extends JsonSerializableStruct {

  /**
   * @var \ActiveTrail\Api\SmsCampaign\ApiSmsCampaignDetails
   */
  public $details; //Details

  /**
   * @var \ActiveTrail\Api\SmsCampaign\ApiSmsCampaignScheduling
   */
  public $scheduling; //Scheduling

  /**
   * @var \ActiveTrail\Api\SmsCampaign\ApiSmsMobile[]
   */
  public $mobiles; //array(ApiSMSMobile)

  /**
   * ApiSmsCampaignPostContainer constructor.
   * @param \ActiveTrail\Api\SmsCampaign\ApiSmsCampaignDetails $details
   * @param \ActiveTrail\Api\SmsCampaign\ApiSmsCampaignScheduling $scheduling
   * @param \ActiveTrail\Api\SmsCampaign\ApiSmsMobile[] $mobiles
   */
  public function __construct (ApiSmsCampaignDetails $details, ApiSmsCampaignScheduling $scheduling, array $mobiles) {
    $this->details = $details;
    $this->scheduling = $scheduling;
    $this->mobiles = $mobiles;
  }

}

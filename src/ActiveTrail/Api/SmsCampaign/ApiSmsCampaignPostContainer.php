<?php

namespace ActiveTrail\Api\SmsCampaign;

class ApiSmsCampaignPostContainer {

  public $details; //Details
  public $scheduling; //Scheduling
  public $mobiles; //array(ApiSMSMobile)

  /**
   * ApiSmsCampaignPostContainer constructor.
   * @param $details
   * @param $scheduling
   * @param $mobiles
   */
  public function __construct (ApiSMSCampaignDetails $details, $scheduling, $mobiles) {
    $this->details = $details;
    $this->scheduling = $scheduling;
    $this->mobiles = $mobiles;
  }

}

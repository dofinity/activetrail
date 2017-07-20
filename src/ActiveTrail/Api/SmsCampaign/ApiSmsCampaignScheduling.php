<?php

namespace ActiveTrail\Api\SmsCampaign;

use ActiveTrail\JsonSerializableStruct;

class ApiSmsCampaignScheduling extends JsonSerializableStruct {

  public $send_now; //boolean
  public $scheduled_date_utc; //Date

  /**
   * ApiSmsCampaignScheduling constructor.
   * @param bool $send_now
   * @param string $scheduled_date_utc
   */
  public function __construct($send_now, $scheduled_date_utc) {
    $this->send_now = $send_now;
    $this->scheduled_date_utc = $scheduled_date_utc;
  }

}
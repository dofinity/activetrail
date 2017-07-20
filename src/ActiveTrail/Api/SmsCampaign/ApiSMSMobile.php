<?php

namespace ActiveTrail\Api\SmsCampaign;

use ActiveTrail\JsonSerializableStruct;

class ApiSMSMobile extends JsonSerializableStruct {

  public $phone_number; //String

  /**
   * ApiSMSMobile constructor.
   * @param $phone_number
   */
  public function __construct($phone_number) {
    $this->phone_number = $phone_number;
  }

}

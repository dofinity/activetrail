<?php

namespace ActiveTrail\Api\SmsCampaign;

use ActiveTrail\JsonSerializableStruct;

class ApiSmsMobile extends JsonSerializableStruct {

  protected $phone_number; //String

  /**
   * ApiSMSMobile constructor.
   * @param $phone_number
   */
  public function __construct($phone_number) {
    $this->phone_number = $phone_number;
  }

}

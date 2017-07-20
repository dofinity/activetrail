<?php

namespace ActiveTrail\Api\SmsCampaign;

use ActiveTrail\JsonSerializableStruct;

class ApiSmsCampaignScheduling extends JsonSerializableStruct {

  public $send_now; //boolean
  public $scheduled_date_utc;

}
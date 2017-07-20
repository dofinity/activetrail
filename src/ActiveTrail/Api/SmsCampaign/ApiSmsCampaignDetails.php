<?php

namespace ActiveTrail\Api\SmsCampaign;

use ActiveTrail\JsonSerializableStruct;

class ApiSmsCampaignDetails extends JsonSerializableStruct {

  public $unsubscribe_text; //String
  public $can_unsubscribe; //boolean
  public $name; //String
  public $from_name; //String
  public $content;

}
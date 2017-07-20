<?php

namespace ActiveTrail\Api\Campaign;

use ActiveTrail\JsonSerializableStruct;

class ApiCampaignDetails extends JsonSerializableStruct
{
  public $name; //String
  public $subject; //String
  public $user_profile_id; //int
  public $google_analytics_name; //String
  public $sub_account_id; //int
  public $content_category_id; //int
  public $preheader; //String
  public $predictive_delivery; //boolean
  public $segmentation_id;

}

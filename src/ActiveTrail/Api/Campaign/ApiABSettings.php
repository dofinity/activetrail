<?php

namespace ActiveTrail\Api\Campaign;

use ActiveTrail\JsonSerializableStruct;

class ApiABSettings extends JsonSerializableStruct
{
  public $scheduling; //ApiCampaignScheduling
  public $subject; //String
  public $user_profile_id; //int
  public $google_analytics_name; //String
  public $ab_percent_split_groups; //double
  public $wait_time; //WaitTime
  public $winning_version_by; //WinningVersionByType
  public $design; //ApiCampaignDesign
}

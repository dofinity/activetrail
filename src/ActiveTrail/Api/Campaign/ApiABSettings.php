<?php

namespace ActiveTrail\Api\Campaign;

use ActiveTrail\JsonSerializableStruct;

class ApiABSettings extends JsonSerializableStruct
{
  protected $scheduling; //ApiCampaignScheduling
  protected $subject; //String
  protected $user_profile_id; //int
  protected $google_analytics_name; //String
  protected $ab_percent_split_groups; //double
  protected $wait_time; //WaitTime
  protected $winning_version_by; //WinningVersionByType
  protected $design; //ApiCampaignDesign
}

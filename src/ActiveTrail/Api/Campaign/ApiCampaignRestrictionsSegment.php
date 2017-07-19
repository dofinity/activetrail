<?php

namespace ActiveTrail\Api\Campaign;

class ApiCampaignRestrictionsSegment
{
  protected $limit_amount; //int
  protected $limit_per_hour; //int
  protected $last_days_not_received; //int
  protected $groups_excluded_ids; //array(int)
  protected $not_opened_campaign_ids; //array(int)
  protected $not_received_campaign_ids; //array(int)
  protected $sub_account_id; //int
  protected $group_ids; //array(int)
  protected $mailing_list_id; //int
}

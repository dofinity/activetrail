<?php
class ApiCampaignRestrictionsSegment
{
  public $limit_amount; //int
  public $limit_per_hour; //int
  public $last_days_not_received; //int
  public $groups_excluded_ids; //array(int)
  public $not_opened_campaign_ids; //array(int)
  public $not_received_campaign_ids; //array(int)
  public $sub_account_id; //int
  public $group_ids; //array(int)
  public $mailing_list_id; //int
}
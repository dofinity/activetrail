<?php

namespace ActiveTrail\Api\Campaign;

use ActiveTrail\JsonSerializableStruct;

class ApiCampaignDetails extends JsonSerializableStruct
{
  protected $name; //String
  protected $subject; //String
  protected $user_profile_id; //int
  protected $google_analytics_name; //String
  protected $sub_account_id; //int
  protected $content_category_id; //int
  protected $preheader; //String
  protected $predictive_delivery; //boolean
  protected $segmentation_id;

  /**
   * ApiCampaignDetails constructor.
   * @param $name
   * @param $subject
   * @param $user_profile_id
   * @param $google_analytics_name
   * @param $sub_account_id
   * @param $content_category_id
   * @param $preheader
   * @param $predictive_delivery
   * @param $segmentation_id
   */
  public function __construct(
    $name,
    $subject,
    $user_profile_id = null,
    $google_analytics_name = null,
    $sub_account_id = null,
    $content_category_id = null,
    $preheader = null,
    $predictive_delivery = null,
    $segmentation_id = null
  ) {
    $this->name = $name;
    $this->subject = $subject;
    $this->user_profile_id = $user_profile_id;
    $this->google_analytics_name = $google_analytics_name;
    $this->sub_account_id = $sub_account_id;
    $this->content_category_id = $content_category_id;
    $this->preheader = $preheader;
    $this->predictive_delivery = $predictive_delivery;
    $this->segmentation_id = $segmentation_id;
  } //int


}

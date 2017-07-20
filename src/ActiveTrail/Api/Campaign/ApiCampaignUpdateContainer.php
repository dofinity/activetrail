<?php

namespace ActiveTrail\Api\Campaign;

use ActiveTrail\Api\Ecommerce\ApiEcommerceDataList;
use ActiveTrail\JsonSerializableStruct;

class ApiCampaignUpdateContainer extends JsonSerializableStruct {

  public $send_test; //String, Email addresses, you need to separated by comma(,).
  public $details; //ApiCampaignDetails
  public $design; //ApiCampaignDesign
  public $template; //ApiCampaignTemplate
  public $a_b_settings; //ApiABSettings
  public $carts; //ApiEcommerceDataList
  public $pairs; //array(Pair)

  /**
   * ApiCampaignUpdateContainer constructor.
   * @param $send_test
   * @param $details
   * @param $design
   * @param $template
   * @param $a_b_settings
   * @param $carts
   * @param $pairs
   */
  public function __construct(ApiCampaignDetails $details,
    $send_test = null, ApiCampaignDesign $design = null, ApiCampaignTemplate $template = null,
                              ApiABSettings $a_b_settings = null, ApiEcommerceDataList $carts = null, $pairs = null) {
    $this->send_test = $send_test;
    $this->details = $details;
    $this->design = $design;
    $this->template = $template;
    $this->a_b_settings = $a_b_settings;
    $this->carts = $carts;
    $this->pairs = $pairs;
  }

}



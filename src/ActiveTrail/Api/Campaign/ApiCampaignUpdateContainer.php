<?php

namespace ActiveTrail\Api\Campaign;

use ActiveTrail\Api\Ecommerce\ApiEcommerceDataList;
use ActiveTrail\Api\Utility\Pair;
use ActiveTrail\JsonSerializableStruct;

class ApiCampaignUpdateContainer extends JsonSerializableStruct {

  public $send_test; //String, Email addresses, you need to separated by comma(,).

  /**
   * @var ApiCampaignDetails;
   */
  public $details; //ApiCampaignDetails

  /**
   * @var ApiCampaignDesign;
   */
  public $design; //ApiCampaignDesign

  /**
   * @var ApiCampaignTemplate;
   */
  public $template; //ApiCampaignTemplate

  /**
   * @var ApiABSettings
   */
  public $a_b_settings; //ApiABSettings

  /**
   * @var ApiEcommerceDataList
   */
  public $carts; //ApiEcommerceDataList

  /**
   * @var Pair[]
   */
  public $pairs;

  /**
   * ApiCampaignUpdateContainer constructor.
   * @param $send_test
   * @param ApiCampaignDetails $details
   * @param ApiCampaignDesign $design
   * @param ApiCampaignTemplate $template
   * @param ApiABSettings $a_b_settings
   * @param ApiEcommerceDataList $carts
   * @param Pair[] $pairs
   */
  public function __construct (
    $send_test,
    ApiCampaignDetails $details,
    ApiCampaignDesign $design,
    ApiCampaignTemplate $template,
    ApiABSettings $a_b_settings,
    ApiEcommerceDataList $carts,
    array $pairs
  ) {
    $this->send_test = $send_test;
    $this->details = $details;
    $this->design = $design;
    $this->template = $template;
    $this->a_b_settings = $a_b_settings;
    $this->carts = $carts;
    $this->pairs = $pairs;
  }

}



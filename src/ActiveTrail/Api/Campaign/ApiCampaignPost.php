<?php

namespace ActiveTrail\Api\Campaign;
use ActiveTrail\Api\Ecommerce\ApiEcommerceDataList;

/**
 * Class ApiCampaignPost
 *
 * CREATE AND RETURN A NEW CAMPAIGN
 */
class ApiCampaignPost extends ApiCampaignUpdateContainer
{
  public $scheduling; //ApiCampaignScheduling
  public $segment; //ApiCampaignRestrictionsSegment

  /**
   * ApiCampaignPost constructor.
   * @param $scheduling
   * @param $carts
   * @param $pairs
   * @param $segment
   * @param $send_test
   * @param $details
   * @param $design
   * @param $template
   * @param $a_b_settings
   */
  public function __construct(ApiCampaignScheduling $scheduling, ApiEcommerceDataList $carts, array $pairs, ApiCampaignRestrictionsSegment $segment,
                              $send_test, ApiCampaignDetails $details, ApiCampaignDesign $design, ApiCampaignTemplate $template, ApiABSettings $a_b_settings) {
    // Call parent constructor first
    parent::__construct($details, $send_test, $design, $template, $a_b_settings, $carts, $pairs);
    // Set additional parameters
    $this->scheduling = $scheduling;
    $this->segment = $segment;

  }

}

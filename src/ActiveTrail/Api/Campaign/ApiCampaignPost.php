<?php

namespace ActiveTrail\Api\Campaign;
use ActiveTrail\Api\Ecommerce\ApiEcommerceDataList;

/**
 * Class ApiCampaignPost
 *
 * Create and return a new campaign
 */
class ApiCampaignPost extends ApiCampaignUpdateContainer
{

  /**
   * @var ApiCampaignScheduling;
   */
  public $scheduling;

  /**
   * @var ApiCampaignRestrictionsSegment;
   */
  public $segment;



}

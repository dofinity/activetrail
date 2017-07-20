<?php

namespace ActiveTrail;

use ActiveTrail\Api\Campaign\ApiCampaignContactPost;
use ActiveTrail\Api\Contact\PostContactContainer;

interface SmsCampaignInterface extends CampaignInterface {

  /**
   * @return \JsonSerializable
   */
  public function getDetails();
}

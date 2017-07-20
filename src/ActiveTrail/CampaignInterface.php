<?php

namespace ActiveTrail;

use ActiveTrail\Api\Campaign\ApiCampaignContactPost;
use ActiveTrail\Api\Contact\PostContactContainer;

interface CampaignInterface {

  /**
   * Submits the campaign to active trail.
   */
  public function sendCampaign();
}

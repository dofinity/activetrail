<?php

namespace ActiveTrail;


use ActiveTrail\Api\Contact\PostContactContainer;

trait ActiveTrailRequestBuilder {

  protected $payload;

  /**
   * Get payload for creating / updating contacts
   *
   * @param $email
   * @return \ActiveTrail\Api\Contact\PostContactContainer
   */
  public function getPostContactContainer($email) {
    return new PostContactContainer($email);
  }

  public function getApiCampaignContactPost() {

  }

}
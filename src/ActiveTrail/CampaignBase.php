<?php

namespace ActiveTrail;

use ActiveTrail\Rest\HttpClient;

abstract class CampaignBase implements CampaignInterface {
  
  protected $client;

  protected $payload;

  /**
   * ActiveTrailApi constructor.
   * @param $apiToken
   */
  public function __construct($apiToken) {
    $this->client = new HttpClient($apiToken);
  }

}

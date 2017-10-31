<?php

namespace ActiveTrail;

use ActiveTrail\Rest\HttpClient;

abstract class ActiveTrailBase implements \JsonSerializable {

  protected $client;
  protected $endpoint;

  /**
   * ActiveTrailApi constructor.
   * @param $apiToken
   * @param $endpoint
   */
  public function __construct($api_token, $endpoint) {
    $this->client = new HttpClient($api_token);
    $this->endpoint = $endpoint;
  }

}

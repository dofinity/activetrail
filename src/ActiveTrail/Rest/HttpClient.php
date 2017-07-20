<?php

namespace ActiveTrail\Rest;
use GuzzleHttp\Client;

/**
 * Class HttpClient
 * @package ActiveTrail\Rest
 */
class HttpClient {

  const CONNECTION_TIMEOUT = 5;
  const REQUEST_TIMEOUT = 10;
  private $apiToken;

  /**
   * HttpClient constructor.
   * @param $apiToken
   */
  public function __construct($apiToken) {
    $this->apiToken = $apiToken;
  }


  /**
   * General method for making API calls to ActiveTrail via GuzzleHttp.
   * @param $endpoint
   * @param $method
   * @param $payload
   * @return string
   */
  public function MakeActiveTrailApiCall($endpoint, $method, $payload = null){

    // First, make sure we have an authorization token
    if (empty($this->apiToken)) {
      throw new \Exception('You must provide an Api Token.');
    }

    $client = new Client([ 'base_uri' => EndPoints::$API_BASE['uri'] ]);

    $request_options = [
      'connect_timeout' => self::CONNECTION_TIMEOUT,
      'timeout' => self::REQUEST_TIMEOUT,
      'headers' => [ 'Authorization' => 'Basic ' . $this->apiToken ] // Add Authorization header based on token
    ];

    // Add payload if one was provided.
    if (!empty($payload)) {
      $request_options['json'] = $payload;
    }

    return $client->request($method, $endpoint, $request_options);

  }
}


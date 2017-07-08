<?php

namespace ActiveTrail\Rest;
use GuzzleHttp\Client;
use ActiveTrail\Rest\EndPoints;

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
  public function MakeActiveTrailApiCall($endpoint, $method, $payload){

    // First, make sure we have an authorization token
    if (empty($this->apiToken)) {
      throw new \Exception('You must provide an Api Token.');
    }

    $client = new Client(['base_uri' => EndPoints::API_BASE['uri']]);

    $request = $client->request($method, $endpoint, [
      'json' => json_encode($payload),
      'connect_timeout' => self::CONNECTION_TIMEOUT,
      'timeout' => self::REQUEST_TIMEOUT
    ]);

    $response = $client->send($request);
    //Extract the contents from the response.
    return $response->getBody()->getContents();

  }
}


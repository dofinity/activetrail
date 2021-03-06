<?php

namespace ActiveTrail;

use ActiveTrail\Rest\HttpClient;
use GuzzleHttp\Psr7\Response;

abstract class ActiveTrailBase {

  /**
   * @var \ActiveTrail\Rest\HttpClient
   */
  protected $client;

  /**
   * @var string
   */
  protected $endpoint;

  /**
   * ActiveTrailApi constructor.
   *
   * @param string $apiToken
   * @param string $endpoint
   */
  public function __construct($api_token, $endpoint) {
    $this->client = new HttpClient($api_token);
    $this->endpoint = $endpoint;
  }

  /**
   * Helper function to extract the guzzle response and decode it.
   *
   * @param \GuzzleHttp\Psr7\Response $response
   *
   * @return mixed
   */
  protected function getDecodedJsonResponse(Response $response) {
    return json_decode($response->getBody()->getContents());
  }

  /**
   * Wraps the http client MakeActiveTrailApiCall method.
   *
   * @param mixed $payload
   * @param array|null $endpoint_params
   *
   * @return \GuzzleHttp\Psr7\Response
   *
   * @throws \Exception
   *
   * @see \ActiveTrail\Rest\HttpClient::MakeActiveTrailApiCall()
   */
  protected function makeApiCall($payload = null, $endpoint_params = null, $extra_headers = []) {
    return $this->client->MakeActiveTrailApiCall(
      $this->endpoint['uri'],
      $this->endpoint['method'],
      $payload,
      $endpoint_params,
      $extra_headers
    );
  }

}

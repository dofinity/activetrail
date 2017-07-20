<?php

namespace ActiveTrail;

use ActiveTrail\Rest\HttpClient;

abstract class CampaignBase implements CampaignInterface, \JsonSerializable {
  
  protected $client;

  protected $payload;

  protected $campaignEndpoint;

  /**
   * ActiveTrailApi constructor.
   * @param $apiToken
   */
  public function __construct($apiToken, $campaign_endpoint) {
    $this->client = new HttpClient($apiToken);
    $this->campaignEndpoint = $campaign_endpoint;
  }

  public function sendCampaign() {
    $this->client->MakeActiveTrailApiCall(
      $this->campaignEndpoint['uri'],
      $this->campaignEndpoint['method'],
      $this
    );
  }

  /**
   * @return \JsonSerializable
   */
  abstract protected function getCampaign();

  /**
   * {@inheritdoc}
   */
  function jsonSerialize() {
    return $this->getCampaign()->jsonSerialize();
  }

}

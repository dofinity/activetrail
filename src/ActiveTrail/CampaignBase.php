<?php

namespace ActiveTrail;

use ActiveTrail\Rest\HttpClient;

abstract class CampaignBase implements CampaignInterface, \JsonSerializable {
  
  protected $client;

  protected $payload;

  protected $campaignEndpoint;

  protected $extra_headers;

  /**
   * ActiveTrailApi constructor.
   * @param $apiToken
   * @param $campaign_endpoint
   */
  public function __construct($apiToken, $campaign_endpoint) {
    $this->client = new HttpClient($apiToken);
    $this->campaignEndpoint = $campaign_endpoint;
    $this->extra_headers = [];
  }

  public function sendCampaign() {
    return $this->client->MakeActiveTrailApiCall(
      $this->campaignEndpoint['uri'],
      $this->campaignEndpoint['method'],
      $this,
      null,
      $this->extra_headers
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setSendNow($send_now = TRUE) {
    $this->getCampaignScheduling()->send_now = $send_now;
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function setScheduledDate(\DateTime $scheduled_date) {
    $scheduled_date->setTimezone(new \DateTimeZone('UTC'));
    $this->getCampaignScheduling()->scheduled_date_utc = $scheduled_date->format('Y-m-d H:i:s');
    return $this;
  }

  /**
   * Sets the campaign name
   *
   * @param mixed $name
   * @return $this
   */
  public function setName($name) {
    $this->getDetails()->name = $name;
    return $this;
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

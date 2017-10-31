<?php

namespace ActiveTrail;

use ActiveTrail\Rest\HttpClient;

abstract class CampaignBase extends ActiveTrailBase implements CampaignInterface, \JsonSerializable {

  protected $client;

  protected $payload;

  protected $extra_headers;

  /**
   * ActiveTrailApi constructor.
   *
   * @param $api_token
   * @param $campaign_endpoint
   */
  public function __construct($api_token, $campaign_endpoint) {
    parent::__construct($api_token, $campaign_endpoint);

    $this->extra_headers = [];
  }

  public function sendCampaign() {
    return $this->client->MakeActiveTrailApiCall(
      $this->endpoint['uri'],
      $this->endpoint['method'],
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
  public function jsonSerialize() {
    return $this->getCampaign()->jsonSerialize();
  }

}

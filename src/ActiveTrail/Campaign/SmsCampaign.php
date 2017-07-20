<?php

namespace ActiveTrail\Campaign;

use ActiveTrail\Api\SmsCampaign\ApiSmsCampaignDetails;
use ActiveTrail\Api\SmsCampaign\ApiSmsCampaignPostContainer;
use ActiveTrail\Api\SmsCampaign\ApiSmsCampaignScheduling;
use ActiveTrail\Api\SmsCampaign\ApiSmsMobile;
use ActiveTrail\CampaignBase;
use ActiveTrail\Rest\EndPoints;
use ActiveTrail\SmsCampaignInterface;

class SmsCampaign extends CampaignBase implements SmsCampaignInterface {

  /**
   * @var \JsonSerializable
   */
  protected $campaignContainer;

  /**
   * SmsCampaign constructor.
   * @param string $apiToken
   */
  public function __construct($apiToken) {
    parent::__construct($apiToken, EndPoints::$SMS_CAMPAIGNS);
    $this->campaignContainer = new ApiSmsCampaignPostContainer(new ApiSmsCampaignDetails(), new ApiSmsCampaignScheduling(), []);
  }

  /**
   * {@inheritdoc}
   */
  public function getDetails() {
    return $this->campaignContainer->details;
  }

  /**
   * {@inheritdoc}
   */
  public function getCampaignScheduling() {
    return $this->campaignContainer->scheduling;
  }

  /**
   * {@inheritdoc}
   */
  public function addPhones(array $numbers) {
    foreach ($numbers as $number) {
      $this->campaignContainer->mobiles[] = new ApiSmsMobile($number);
    }
  }

  /**
   * {@inheritdoc}
   */
  protected function getCampaign() {
    return $this->campaignContainer;
  }

  /**
   * {@inheritdoc}
   */
  public function setUnsubscribeText($unsubscribe_text) {
    $this->getDetails()->unsubscribe_text = $unsubscribe_text;
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function setCanUnsubscribe($can_unsubscribe = TRUE) {
    $this->getDetails()->can_unsubscribe = $can_unsubscribe;
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function setFromName($from_name) {
    $this->getDetails()->from_name = $from_name;
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function setContent($content) {
    $this->getDetails()->content = $content;
    return $this;
  }

}

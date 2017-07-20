<?php

namespace ActiveTrail;

interface CampaignInterface {

  /**
   * Submits the campaign to active trail.
   */
  public function sendCampaign();

  /**
   * @return \JsonSerializable
   */
  public function getDetails();

  /**
   * @return \ActiveTrail\Api\SmsCampaign\ApiSmsCampaignScheduling
   */
  public function getCampaignScheduling();

  /**
   * @param mixed $name
   * @return static
   */
  public function setName($name);

  /**
   * @param mixed $send_now
   * @return static
   */
  public function setSendNow($send_now = TRUE);

  /**
   * @param \DateTime $scheduled_date
   * @return static
   */
  public function setScheduledDate(\DateTime $scheduled_date);

  /**
   * @param mixed $content
   * @return static
   */
  public function setContent($content);


}

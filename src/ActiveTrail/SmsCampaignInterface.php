<?php

namespace ActiveTrail;

use ActiveTrail\Api\Campaign\ApiCampaignContactPost;
use ActiveTrail\Api\Contact\PostContactContainer;

interface SmsCampaignInterface extends CampaignInterface {

  /**
   * @return \JsonSerializable
   */
  public function getDetails();

  /**
   * @return \ActiveTrail\Api\SmsCampaign\ApiSmsCampaignScheduling
   */
  public function getCampaignScheduling();

  /**
   * @param string[] $numbers
   */
  public function addPhones(array $numbers);

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
   * @param mixed $unsubscribe_text
   * @return static
   */
  public function setUnsubscribeText($unsubscribe_text);

  /**
   * @param mixed $can_unsubscribe
   * @return static
   */
  public function setCanUnsubscribe($can_unsubscribe = TRUE);

  /**
   * @param mixed $name
   * @return static
   */
  public function setName($name);

  /**
   * @param mixed $from_name
   * @return static
   */
  public function setFromName($from_name);

  /**
   * @param mixed $content
   * @return static
   */
  public function setContent($content);
}

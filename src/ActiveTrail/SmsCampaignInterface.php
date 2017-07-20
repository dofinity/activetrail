<?php

namespace ActiveTrail;

interface SmsCampaignInterface extends CampaignInterface {

  /**
   * @param string[] $numbers
   */
  public function addPhones(array $numbers);

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
   * @param mixed $from_name
   * @return static
   */
  public function setFromName($from_name);

}

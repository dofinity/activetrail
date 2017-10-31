<?php

namespace ActiveTrail;

use ActiveTrail\Api\Contact\PostContactTriggerContainer;

/**
 * Class EmailCampaignInterface
 * @package ActiveTrail
 */
interface GroupsMemberInterface {

  /**
   * Creates a contact or returns an existing contact.
   *
   * @param \ActiveTrail\Api\Contact\PostContactTriggerContainer $contact
   * @return mixed
   */
  public function createContact(PostContactTriggerContainer $contact, $group_id);

}
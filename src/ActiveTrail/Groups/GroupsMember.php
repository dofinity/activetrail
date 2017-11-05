<?php

namespace ActiveTrail\Groups;

use ActiveTrail\ActiveTrailBase;
use ActiveTrail\Api\Contact\PostContactTriggerContainer;
use ActiveTrail\GroupsMemberInterface;
use ActiveTrail\Rest\EndPoints;

/**
 * Class GroupsMember
 *
 * @package ActiveTrail\Gropus
 */
class GroupsMember extends ActiveTrailBase implements GroupsMemberInterface {

  /**
   * ActiveTrailApi constructor.
   *
   * @param string $api_token
   */
  public function __construct($api_token) {
    parent::__construct($api_token, EndPoints::$GROUPS_MEMBER);
  }

  /**
   * Create and return a new contact (or existing one if already exists)
   *
   * @param \ActiveTrail\Api\Contact\PostContactTriggerContainer $contact
   * @param int $group_id
   *
   * @return mixed
   */
  public function createContact(PostContactTriggerContainer $contact, $group_id) {
    if (empty($contact->subscribe_ip)) {
      $contact->subscribe_ip = $_SERVER['REMOTE_ADDR'];
    }

    //Make the Api Call.
    $contact_response = $this->client->MakeActiveTrailApiCall(
      $this->endpoint['uri'],
      $this->endpoint['method'],
      $contact,
      ['id' => $group_id]
    );
    return $this->getDecodedJsonResponse($contact_response);
  }

}

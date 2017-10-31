<?php

namespace ActiveTrail\Groups;

use ActiveTrail\Api\Contact\PostContactTriggerContainer;
use ActiveTrail\GroupsMemberInterface;
use ActiveTrail\JsonSerializableStruct;
use ActiveTrail\Rest\EndPoints;
use ActiveTrail\Rest\HttpClient;
use GuzzleHttp\Psr7\Response;

/**
 * Class GroupsMember
 * @package ActiveTrail\Gropus
 */
class GroupsMember extends JsonSerializableStruct implements GroupsMemberInterface {

  protected $client;

//  protected $contactContainer;

  /**
   * ActiveTrailApi constructor.
   * @param $api_token
   */
  public function __construct($api_token) {
    $this->client = new HttpClient($api_token);
  }

  /**
   * Create and return a new contact (or existing one if already exists)
   *
   * @param \ActiveTrail\Api\Contact\PostContactTriggerContainer $contact
   * @param int $group_id
   * @return string
   */
  public function createContact(PostContactTriggerContainer $contact, $group_id) {
    if (empty($contact->subscribe_ip)) {
      $contact->subscribe_ip = $_SERVER['REMOTE_ADDR'];
    }

    //Make the Api Call.
    $contact_response = $this->client->MakeActiveTrailApiCall(
      EndPoints::$GROUPS_MEMBER['uri'],
      EndPoints::$GROUPS_MEMBER['method'],
      $contact,
      ['id' => $group_id]
    );
    return $this->getDecodedJsonResponse($contact_response);
  }

  /**
   * Helper function to extract the guzzle response and decode it.
   * @param \GuzzleHttp\Psr7\Response $response
   * @return mixed
   */
  private function getDecodedJsonResponse(Response $response) {
    return json_decode($response->getBody()->getContents());
  }

}

<?php

namespace ActiveTrail\Api\Contact;

use ActiveTrail\JsonSerializableStruct;

/**
 * Class APIContactsImport
 *
 * @package ActiveTrail\Api\Contact
 */
class ApiContactsImport extends JsonSerializableStruct {

  /**
   * @var int
   */
  public $mailing_list;

  /**
   * @var int
   */
  public $group;

  /**
   * @var \ActiveTrail\Api\Contact\ApiContact[]
   */
  public $contacts = [];

  /**
   * @return int
   */
  public function getMailingList() {
    return $this->mailing_list;
  }

  /**
   * @param int $mailing_list
   *
   * @return ApiContactsImport
   */
  public function setMailingList($mailing_list) {
    $this->mailing_list = $mailing_list;
    return $this;
  }

  /**
   * @return int
   */
  public function getGroup() {
    return $this->group;
  }

  /**
   * @param int $group
   *
   * @return ApiContactsImport
   */
  public function setGroup($group) {
    $this->group = $group;
    return $this;
  }

  /**
   * @return \ActiveTrail\Api\Contact\ApiContact[]
   */
  public function getContacts() {
    return $this->contacts;
  }

  /**
   * @param \ActiveTrail\Api\Contact\ApiContact[] $contacts
   *
   * @return ApiContactsImport
   */
  public function setContacts($contacts) {
    $this->contacts = $contacts;
    return $this;
  }

  /**
   * @param \ActiveTrail\Api\Contact\ApiContact $contact
   *
   * @return ApiContactsImport
   */
  public function addContact($contact) {
    $this->contacts[] = $contact;
    return $this;
  }


}
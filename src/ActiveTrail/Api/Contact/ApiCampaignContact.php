<?php

namespace ActiveTrail\Api\Contact;

use ActiveTrail\JsonSerializableStruct;

class ApiCampaignContact extends JsonSerializableStruct
{

  public $contacts_ids; // Collection of int
  public $contacts_emails; // Collection of string

  /**
   * @return mixed
   */
  public function getContactsIds() {
    return $this->contacts_ids;
  }

  /**
   * @param mixed $contacts_ids
   */
  public function setContactsIds($contacts_ids) {
    $this->contacts_ids = $contacts_ids;
  }

  /**
   * @return mixed
   */
  public function getContactsEmails() {
    return $this->contacts_emails;
  }

  /**
   * @param mixed $contacts_emails
   */
  public function setContactsEmails($contacts_emails) {
    $this->contacts_emails = $contacts_emails;
  }



}
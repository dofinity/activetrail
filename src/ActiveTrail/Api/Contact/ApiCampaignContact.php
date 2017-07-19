<?php

namespace ActiveTrail\Api\Contact;

use ActiveTrail\JsonSerializableStruct;

class ApiCampaignContact extends JsonSerializableStruct
{

  protected $contacts_ids; // Collection of int
  protected $contacts_emails; // Collection of string

  /**
   * ApiCampaignContact constructor.
   * @param $contacts_ids
   * @param $contacts_emails
   */
  public function __construct(array $contacts_ids, array $contacts_emails) {
    $this->contacts_ids = $contacts_ids;
    $this->contacts_emails = $contacts_emails;
  }

}
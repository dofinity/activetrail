<?php

namespace ActiveTrail\Contact;

use ActiveTrail\ActiveTrailBase;
use ActiveTrail\Api\Contact\ApiContactsImport;
use ActiveTrail\Rest\EndPoints;

/**
 * Class ImportContacts
 *
 * @package ActiveTrail\Contact
 */
class ContactsImport extends ActiveTrailBase {

  public function __construct($api_token) {
    parent::__construct($api_token, EndPoints::$CONTACTS_IMPORT);
  }

  /**
   * @param \ActiveTrail\Api\Contact\ApiContactsImport $contacts_import
   *   The payload.
   *
   * @return mixed
   */
  public function import(ApiContactsImport $contacts_import) {
    return $this->getDecodedJsonResponse($this->makeApiCall($contacts_import));
  }

}
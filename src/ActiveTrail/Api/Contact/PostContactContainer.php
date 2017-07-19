<?php

namespace ActiveTrail\Api\Contact;

use ActiveTrail\JsonSerializableStruct;

/**
 * Class PostContactContainer
 * @package ActiveTrail\Api\Contact
 * @todo: abstract jsonSerialize + null filtering
 */
class PostContactContainer extends JsonSerializableStruct  {

  protected $subscribe_ip; //String
  protected $status; //String
  protected $double_optin; //DoubleOptin
  protected $email; //String
  protected $sms; //String
  protected $first_name; //String
  protected $last_name; //String
  protected $anniversary; //Date
  protected $birthday; //Date
  protected $city; //String
  protected $fax; //String
  protected $phone1; //String
  protected $phone2; //String
  protected $street; //String
  protected $zip_code; //String
  protected $ext1; //String
  protected $ext2; //String
  protected $ext3; //String
  protected $ext4; //String
  protected $ext5; //String
  protected $ext6; //String
  protected $ext7; //String
  protected $ext8; //String
  protected $ext9; //String
  protected $ext10; //String
  protected $ext11; //String
  protected $ext12; //String
  protected $ext13; //String
  protected $ext14; //String
  protected $ext15; //String
  protected $ext16; //String
  protected $ext17; //String
  protected $ext18; //String
  protected $ext19; //String
  protected $ext20; //String
  protected $ext21; //String
  protected $ext22; //String
  protected $ext23; //String
  protected $ext24; //String
  protected $ext25; //String
  protected $date1; //Date
  protected $date2; //Date
  protected $date3; //Date
  protected $date4; //Date
  protected $date5; //Date
  protected $num1; //int
  protected $num2; //int
  protected $num3; //int
  protected $num4; //int
  protected $num5; //int
  protected $is_do_not_mail; //boolean
  protected $is_deleted;

  /**
   * PostContactContainer constructor.
   * @param $email
   */
  public function __construct($email) {
    $this->email = $email;
  } //boolean

}
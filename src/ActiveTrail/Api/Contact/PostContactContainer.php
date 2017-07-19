<?php

namespace ActiveTrail\Api\Contact;

/**
 * Class PostContactContainer
 * @package ActiveTrail\Api\Contact
 * @todo: abstract jsonSerialize + null filtering
 */
class PostContactContainer implements \JsonSerializable {

  public $subscribe_ip; //String
  public $status; //String
  public $double_optin; //DoubleOptin
  public $email; //String
  public $sms; //String
  public $first_name; //String
  public $last_name; //String
  public $anniversary; //Date
  public $birthday; //Date
  public $city; //String
  public $fax; //String
  public $phone1; //String
  public $phone2; //String
  public $street; //String
  public $zip_code; //String
  public $ext1; //String
  public $ext2; //String
  public $ext3; //String
  public $ext4; //String
  public $ext5; //String
  public $ext6; //String
  public $ext7; //String
  public $ext8; //String
  public $ext9; //String
  public $ext10; //String
  public $ext11; //String
  public $ext12; //String
  public $ext13; //String
  public $ext14; //String
  public $ext15; //String
  public $ext16; //String
  public $ext17; //String
  public $ext18; //String
  public $ext19; //String
  public $ext20; //String
  public $ext21; //String
  public $ext22; //String
  public $ext23; //String
  public $ext24; //String
  public $ext25; //String
  public $date1; //Date
  public $date2; //Date
  public $date3; //Date
  public $date4; //Date
  public $date5; //Date
  public $num1; //int
  public $num2; //int
  public $num3; //int
  public $num4; //int
  public $num5; //int
  public $is_do_not_mail; //boolean
  public $is_deleted;

  /**
   * PostContactContainer constructor.
   * @param $email
   */
  public function __construct($email) {
    $this->email = $email;
  } //boolean

  /**
   * Return JSON serialized data
   * @return array
   */
  public function jsonSerialize() {

    $object = array_filter(get_object_vars($this), function ($val) {
      return !is_null($val);
    });

    return $object;
  }

}
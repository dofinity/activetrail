<?php

namespace ActiveTrail\Api\Contact;

use ActiveTrail\JsonSerializableStruct;

/**
 * Class ApiContact
 *
 * @package ActiveTrail\Api\Contact
 */
class ApiContact extends JsonSerializableStruct {

  /**
   * @var string
   */
  public $email; //String

  /**
   * @var string
   */
  public $sms; //String

  /**
   * @var string
   */
  public $first_name; //String

  /**
   * @var string
   */
  public $last_name; //String

  /**
   * @var \DateTime
   */
  public $anniversary; //Date

  /**
   * @var \DateTime
   */
  public $birthday; //Date

  /**
   * @var string
   */
  public $city; //String

  /**
   * @var string
   */
  public $fax; //String

  /**
   * @var string
   */
  public $phone1; //String

  /**
   * @var string
   */
  public $phone2; //String

  /**
   * @var string
   */
  public $street; //String

  /**
   * @var string
   */
  public $zip_code; //String

  /**
   * @var string
   */
  public $ext1; //String

  /**
   * @var string
   */
  public $ext2; //String

  /**
   * @var string
   */
  public $ext3; //String

  /**
   * @var string
   */
  public $ext4; //String

  /**
   * @var string
   */
  public $ext5; //String

  /**
   * @var string
   */
  public $ext6; //String

  /**
   * @var string
   */
  public $ext7; //String

  /**
   * @var string
   */
  public $ext8; //String

  /**
   * @var string
   */
  public $ext9; //String

  /**
   * @var string
   */
  public $ext10; //String

  /**
   * @var string
   */
  public $ext11; //String

  /**
   * @var string
   */
  public $ext12; //String

  /**
   * @var string
   */
  public $ext13; //String

  /**
   * @var string
   */
  public $ext14; //String

  /**
   * @var string
   */
  public $ext15; //String

  /**
   * @var string
   */
  public $ext16; //String

  /**
   * @var string
   */
  public $ext17; //String

  /**
   * @var string
   */
  public $ext18; //String

  /**
   * @var string
   */
  public $ext19; //String

  /**
   * @var string
   */
  public $ext20; //String

  /**
   * @var string
   */
  public $ext21; //String

  /**
   * @var string
   */
  public $ext22; //String

  /**
   * @var string
   */
  public $ext23; //String

  /**
   * @var string
   */
  public $ext24; //String

  /**
   * @var string
   */
  public $ext25; //String

  /**
   * @var \DateTime
   */
  public $date1; //Date

  /**
   * @var \DateTime
   */
  public $date2; //Date

  /**
   * @var \DateTime
   */
  public $date3; //Date

  /**
   * @var \DateTime
   */
  public $date4; //Date

  /**
   * @var \DateTime
   */
  public $date5; //Date

  /**
   * @var int
   */
  public $num1; //int

  /**
   * @var int
   */
  public $num2; //int

  /**
   * @var int
   */
  public $num3; //int

  /**
   * @var int
   */
  public $num4; //int

  /**
   * @var int
   */
  public $num5; //int

  /**
   * @var bool
   */
  public $is_do_not_mail;

  /**
   * @var bool
   */
  public $is_deleted;

  /**
   * @var \ReflectionClass
   */
  protected static $reflection;

  /**
   * @return \ReflectionClass
   */
  protected static function getReflection() {
    if (empty(static::$reflection)) {
      static::$reflection = new \ReflectionClass(static::class);
    }
    return static::$reflection;
  }

  /**
   * @param array $data
   *
   * @return static
   */
  public static function createFromArray(array $data) {
    $instance = new static();

    foreach ($data as $key => $value) {
      if (static::getReflection()->hasProperty($key)) {
        $instance->{$key} = $value;
      }
    }

    return $instance;
  }

  /**
   * @return string
   */
  public function getEmail() {
    return $this->email;
  }

  /**
   * @param string $email
   *
   * @return ApiContact
   */
  public function setEmail($email) {
    $this->email = $email;
    return $this;
  }

  /**
   * @return string
   */
  public function getSms() {
    return $this->sms;
  }

  /**
   * @param string $sms
   *
   * @return ApiContact
   */
  public function setSms($sms) {
    $this->sms = $sms;
    return $this;
  }

  /**
   * @return string
   */
  public function getFirstName() {
    return $this->first_name;
  }

  /**
   * @param string $first_name
   *
   * @return ApiContact
   */
  public function setFirstName($first_name) {
    $this->first_name = $first_name;
    return $this;
  }

  /**
   * @return string
   */
  public function getLastName() {
    return $this->last_name;
  }

  /**
   * @param string $last_name
   *
   * @return ApiContact
   */
  public function setLastName($last_name) {
    $this->last_name = $last_name;
    return $this;
  }

  /**
   * @return \DateTime
   */
  public function getAnniversary() {
    return $this->anniversary;
  }

  /**
   * @param \DateTime $anniversary
   *
   * @return ApiContact
   */
  public function setAnniversary($anniversary) {
    $this->anniversary = $anniversary;
    return $this;
  }

  /**
   * @return \DateTime
   */
  public function getBirthday() {
    return $this->birthday;
  }

  /**
   * @param \DateTime $birthday
   *
   * @return ApiContact
   */
  public function setBirthday($birthday) {
    $this->birthday = $birthday;
    return $this;
  }

  /**
   * @return string
   */
  public function getCity() {
    return $this->city;
  }

  /**
   * @param string $city
   *
   * @return ApiContact
   */
  public function setCity($city) {
    $this->city = $city;
    return $this;
  }

  /**
   * @return string
   */
  public function getFax() {
    return $this->fax;
  }

  /**
   * @param string $fax
   *
   * @return ApiContact
   */
  public function setFax($fax) {
    $this->fax = $fax;
    return $this;
  }

  /**
   * @return string
   */
  public function getPhone1() {
    return $this->phone1;
  }

  /**
   * @param string $phone1
   *
   * @return ApiContact
   */
  public function setPhone1($phone1) {
    $this->phone1 = $phone1;
    return $this;
  }

  /**
   * @return string
   */
  public function getPhone2() {
    return $this->phone2;
  }

  /**
   * @param string $phone2
   *
   * @return ApiContact
   */
  public function setPhone2($phone2) {
    $this->phone2 = $phone2;
    return $this;
  }

  /**
   * @return string
   */
  public function getStreet() {
    return $this->street;
  }

  /**
   * @param string $street
   *
   * @return ApiContact
   */
  public function setStreet($street) {
    $this->street = $street;
    return $this;
  }

  /**
   * @return string
   */
  public function getZipCode() {
    return $this->zip_code;
  }

  /**
   * @param string $zip_code
   *
   * @return ApiContact
   */
  public function setZipCode($zip_code) {
    $this->zip_code = $zip_code;
    return $this;
  }

  /**
   * @return string
   */
  public function getExt1() {
    return $this->ext1;
  }

  /**
   * @param string $ext1
   *
   * @return ApiContact
   */
  public function setExt1($ext1) {
    $this->ext1 = $ext1;
    return $this;
  }

  /**
   * @return string
   */
  public function getExt2() {
    return $this->ext2;
  }

  /**
   * @param string $ext2
   *
   * @return ApiContact
   */
  public function setExt2($ext2) {
    $this->ext2 = $ext2;
    return $this;
  }

  /**
   * @return string
   */
  public function getExt3() {
    return $this->ext3;
  }

  /**
   * @param string $ext3
   *
   * @return ApiContact
   */
  public function setExt3($ext3) {
    $this->ext3 = $ext3;
    return $this;
  }

  /**
   * @return string
   */
  public function getExt4() {
    return $this->ext4;
  }

  /**
   * @param string $ext4
   *
   * @return ApiContact
   */
  public function setExt4($ext4) {
    $this->ext4 = $ext4;
    return $this;
  }

  /**
   * @return string
   */
  public function getExt5() {
    return $this->ext5;
  }

  /**
   * @param string $ext5
   *
   * @return ApiContact
   */
  public function setExt5($ext5) {
    $this->ext5 = $ext5;
    return $this;
  }

  /**
   * @return string
   */
  public function getExt6() {
    return $this->ext6;
  }

  /**
   * @param string $ext6
   *
   * @return ApiContact
   */
  public function setExt6($ext6) {
    $this->ext6 = $ext6;
    return $this;
  }

  /**
   * @return string
   */
  public function getExt7() {
    return $this->ext7;
  }

  /**
   * @param string $ext7
   *
   * @return ApiContact
   */
  public function setExt7($ext7) {
    $this->ext7 = $ext7;
    return $this;
  }

  /**
   * @return string
   */
  public function getExt8() {
    return $this->ext8;
  }

  /**
   * @param string $ext8
   *
   * @return ApiContact
   */
  public function setExt8($ext8) {
    $this->ext8 = $ext8;
    return $this;
  }

  /**
   * @return string
   */
  public function getExt9() {
    return $this->ext9;
  }

  /**
   * @param string $ext9
   *
   * @return ApiContact
   */
  public function setExt9($ext9) {
    $this->ext9 = $ext9;
    return $this;
  }

  /**
   * @return string
   */
  public function getExt10() {
    return $this->ext10;
  }

  /**
   * @param string $ext10
   *
   * @return ApiContact
   */
  public function setExt10($ext10) {
    $this->ext10 = $ext10;
    return $this;
  }

  /**
   * @return string
   */
  public function getExt11() {
    return $this->ext11;
  }

  /**
   * @param string $ext11
   *
   * @return ApiContact
   */
  public function setExt11($ext11) {
    $this->ext11 = $ext11;
    return $this;
  }

  /**
   * @return string
   */
  public function getExt12() {
    return $this->ext12;
  }

  /**
   * @param string $ext12
   *
   * @return ApiContact
   */
  public function setExt12($ext12) {
    $this->ext12 = $ext12;
    return $this;
  }

  /**
   * @return string
   */
  public function getExt13() {
    return $this->ext13;
  }

  /**
   * @param string $ext13
   *
   * @return ApiContact
   */
  public function setExt13($ext13) {
    $this->ext13 = $ext13;
    return $this;
  }

  /**
   * @return string
   */
  public function getExt14() {
    return $this->ext14;
  }

  /**
   * @param string $ext14
   *
   * @return ApiContact
   */
  public function setExt14($ext14) {
    $this->ext14 = $ext14;
    return $this;
  }

  /**
   * @return string
   */
  public function getExt15() {
    return $this->ext15;
  }

  /**
   * @param string $ext15
   *
   * @return ApiContact
   */
  public function setExt15($ext15) {
    $this->ext15 = $ext15;
    return $this;
  }

  /**
   * @return string
   */
  public function getExt16() {
    return $this->ext16;
  }

  /**
   * @param string $ext16
   *
   * @return ApiContact
   */
  public function setExt16($ext16) {
    $this->ext16 = $ext16;
    return $this;
  }

  /**
   * @return string
   */
  public function getExt17() {
    return $this->ext17;
  }

  /**
   * @param string $ext17
   *
   * @return ApiContact
   */
  public function setExt17($ext17) {
    $this->ext17 = $ext17;
    return $this;
  }

  /**
   * @return string
   */
  public function getExt18() {
    return $this->ext18;
  }

  /**
   * @param string $ext18
   *
   * @return ApiContact
   */
  public function setExt18($ext18) {
    $this->ext18 = $ext18;
    return $this;
  }

  /**
   * @return string
   */
  public function getExt19() {
    return $this->ext19;
  }

  /**
   * @param string $ext19
   *
   * @return ApiContact
   */
  public function setExt19($ext19) {
    $this->ext19 = $ext19;
    return $this;
  }

  /**
   * @return string
   */
  public function getExt20() {
    return $this->ext20;
  }

  /**
   * @param string $ext20
   *
   * @return ApiContact
   */
  public function setExt20($ext20) {
    $this->ext20 = $ext20;
    return $this;
  }

  /**
   * @return string
   */
  public function getExt21() {
    return $this->ext21;
  }

  /**
   * @param string $ext21
   *
   * @return ApiContact
   */
  public function setExt21($ext21) {
    $this->ext21 = $ext21;
    return $this;
  }

  /**
   * @return string
   */
  public function getExt22() {
    return $this->ext22;
  }

  /**
   * @param string $ext22
   *
   * @return ApiContact
   */
  public function setExt22($ext22) {
    $this->ext22 = $ext22;
    return $this;
  }

  /**
   * @return string
   */
  public function getExt23() {
    return $this->ext23;
  }

  /**
   * @param string $ext23
   *
   * @return ApiContact
   */
  public function setExt23($ext23) {
    $this->ext23 = $ext23;
    return $this;
  }

  /**
   * @return string
   */
  public function getExt24() {
    return $this->ext24;
  }

  /**
   * @param string $ext24
   *
   * @return ApiContact
   */
  public function setExt24($ext24) {
    $this->ext24 = $ext24;
    return $this;
  }

  /**
   * @return string
   */
  public function getExt25() {
    return $this->ext25;
  }

  /**
   * @param string $ext25
   *
   * @return ApiContact
   */
  public function setExt25($ext25) {
    $this->ext25 = $ext25;
    return $this;
  }

  /**
   * @return \DateTime
   */
  public function getDate1() {
    return $this->date1;
  }

  /**
   * @param \DateTime $date1
   *
   * @return ApiContact
   */
  public function setDate1($date1) {
    $this->date1 = $date1;
    return $this;
  }

  /**
   * @return \DateTime
   */
  public function getDate2() {
    return $this->date2;
  }

  /**
   * @param \DateTime $date2
   *
   * @return ApiContact
   */
  public function setDate2($date2) {
    $this->date2 = $date2;
    return $this;
  }

  /**
   * @return \DateTime
   */
  public function getDate3() {
    return $this->date3;
  }

  /**
   * @param \DateTime $date3
   *
   * @return ApiContact
   */
  public function setDate3($date3) {
    $this->date3 = $date3;
    return $this;
  }

  /**
   * @return \DateTime
   */
  public function getDate4() {
    return $this->date4;
  }

  /**
   * @param \DateTime $date4
   *
   * @return ApiContact
   */
  public function setDate4($date4) {
    $this->date4 = $date4;
    return $this;
  }

  /**
   * @return \DateTime
   */
  public function getDate5() {
    return $this->date5;
  }

  /**
   * @param \DateTime $date5
   *
   * @return ApiContact
   */
  public function setDate5($date5) {
    $this->date5 = $date5;
    return $this;
  }

  /**
   * @return int
   */
  public function getNum1() {
    return $this->num1;
  }

  /**
   * @param int $num1
   *
   * @return ApiContact
   */
  public function setNum1($num1) {
    $this->num1 = $num1;
    return $this;
  }

  /**
   * @return int
   */
  public function getNum2() {
    return $this->num2;
  }

  /**
   * @param int $num2
   *
   * @return ApiContact
   */
  public function setNum2($num2) {
    $this->num2 = $num2;
    return $this;
  }

  /**
   * @return int
   */
  public function getNum3() {
    return $this->num3;
  }

  /**
   * @param int $num3
   *
   * @return ApiContact
   */
  public function setNum3($num3) {
    $this->num3 = $num3;
    return $this;
  }

  /**
   * @return int
   */
  public function getNum4() {
    return $this->num4;
  }

  /**
   * @param int $num4
   *
   * @return ApiContact
   */
  public function setNum4($num4) {
    $this->num4 = $num4;
    return $this;
  }

  /**
   * @return int
   */
  public function getNum5() {
    return $this->num5;
  }

  /**
   * @param int $num5
   *
   * @return ApiContact
   */
  public function setNum5($num5) {
    $this->num5 = $num5;
    return $this;
  }

  /**
   * @return bool
   */
  public function isDoNotMail() {
    return $this->is_do_not_mail;
  }

  /**
   * @param bool $is_do_not_mail
   *
   * @return ApiContact
   */
  public function setIsDoNotMail($is_do_not_mail) {
    $this->is_do_not_mail = $is_do_not_mail;
    return $this;
  }

  /**
   * @return bool
   */
  public function isDeleted() {
    return $this->is_deleted;
  }

  /**
   * @param bool $is_deleted
   *
   * @return ApiContact
   */
  public function setIsDeleted($is_deleted) {
    $this->is_deleted = $is_deleted;
    return $this;
  }


}

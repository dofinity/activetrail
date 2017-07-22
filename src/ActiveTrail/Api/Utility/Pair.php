<?php

namespace ActiveTrail\Api\Utility;

class Pair
{

  public $Key; //Key
  public $Value; //Value

  /**
   * Pair constructor.
   * @param $Key
   * @param $Value
   */
  public function __construct($Key, $Value) {
    $this->Key = $Key;
    $this->Value = $Value;
  }

}

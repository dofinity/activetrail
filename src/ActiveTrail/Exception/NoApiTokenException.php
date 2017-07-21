<?php

namespace ActiveTrail\Exception;

/**
 * Class ApiTokenMissingException
 * @package ActiveTrail\Exception
 */
class NoApiTokenException extends BaseException {

  const CODE = 50;

  /**
   * NoApiTokenException constructor.
   * @param string $message
   */
  public function __construct($message = 'Contact Id not found') {
    parent::__construct($message, static::CODE);
  }

}
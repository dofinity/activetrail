<?php

namespace ActiveTrail\Exception;

/**
 * Class ContactIdNotFoundException
 * @package ActiveTrail\Exception
 */
class ContactIdNotFoundException extends BaseException {

  const CODE = 50;

  /**
   * MissingPostArgumentsException constructor.
   * @param string $message
   */
  public function __construct($message = 'Contact Id not found') {
    parent::__construct($message, static::CODE);
  }

}
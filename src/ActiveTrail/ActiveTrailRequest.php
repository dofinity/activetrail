<?php
/**
 * @file ActiveTrailRequest class - defines the structure and defaults for an ActiveTrail request.
 */
namespace ActiveTrail;

class ActiveTrailRequest implements \JsonSerializable {

  protected $campaign_payload;


  /**
   * Return JSON serialized data
   * @return array
   */
  public function jsonSerialize() {
    return get_object_vars($this);
  }

}

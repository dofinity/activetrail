<?php

namespace ActiveTrail\Api\Campaign;

use ActiveTrail\JsonSerializableStruct;

class ApiCampaignDesign extends JsonSerializableStruct
{
  public $content; //String
  public $language_type; //SystemLanguageType
  public $header_footer_language_type; //String
  public $is_add_print_email; //boolean
  public $is_auto_css_inliner; //boolean
}

<?php
class ApiCampaignPost
{
  public $scheduling; //ApiCampaignScheduling
  public $carts; //ApiEcommerceDataList
  public $pairs; //array(Pair)
  public $segment; //ApiCampaignRestrictionsSegment
  public $send_test; //String, Email addresses, you need to separated by comma(,).
  public $details; //ApiCampaignDetails
  public $design; //ApiCampaignDesign
  public $template; //ApiCampaignTemplate
  public $a_b_settings; //ApiABSettings



}
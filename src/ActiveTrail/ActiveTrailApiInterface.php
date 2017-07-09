<?php

namespace ActiveTrail;

use ActiveTrail\Api\Campaign\ApiCampaignContactPost;

interface ActiveTrailApiInterface {

  // Campaigns
  public function SendNewCampaignToContacts(ApiCampaignContactPost $payload);
  public function CreateNewCampaign();

  // Contacts
  public function CreateContact();

  // Templates
  public function GetMyTemplates();

  // SMS Campaigns
  public function CreateSMSCampaign();

}

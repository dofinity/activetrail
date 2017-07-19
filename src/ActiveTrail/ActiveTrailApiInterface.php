<?php

namespace ActiveTrail;

use ActiveTrail\Api\Campaign\ApiCampaignContactPost;
use ActiveTrail\Api\Contact\PostContactContainer;

interface ActiveTrailApiInterface {

  // Campaigns
  public function SendNewCampaignToContacts(ApiCampaignContactPost $payload);
  public function CreateNewCampaign();

  // Contacts
  public function CreateContact(PostContactContainer $contact);

  // Templates
  public function GetMyTemplates();

  // SMS Campaigns
  public function CreateSMSCampaign();

}

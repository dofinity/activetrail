<?php

namespace ActiveTrail;

use ActiveTrail\Api\Campaign\ApiCampaignContactPost;
use ActiveTrail\Api\Contact\PostContactContainer;

/**
 * Class EmailCampaignInterface
 * @package ActiveTrail
 */
interface EmailCampaignInterface extends CampaignInterface {

  // Campaigns
  public function SendNewCampaignToContacts(ApiCampaignContactPost $payload);

  // Contacts
  public function CreateContact(PostContactContainer $contact);

  // Templates
  public function GetMyTemplates();
}
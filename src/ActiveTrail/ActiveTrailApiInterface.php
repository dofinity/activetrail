<?php

namespace ActiveTrail;


interface ActiveTrailApiInterface {

  public function SendNewCampaignToContacts();

  public function CreateNewCampaign();

  public function CreateSMSCampaign();

  public function GetMyTemplates();

}

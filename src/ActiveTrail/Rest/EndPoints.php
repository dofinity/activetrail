<?php

namespace ActiveTrail\Rest;

/**
 * Class RestEndpoints
 *
 * @todo: Generalize.
 */
abstract class EndPoints {

  // Base URI
  const API_BASE = ['method' => '', 'uri' => 'https://webapi.mymarketing.co.il/api/'];

  // Campaigns
  const CAMPAIGNS = ['method' => 'post', 'uri' => 'campaigns']; //Create and return a new campaign
  const CAMPAIGNS_ID_CONTACTS = ['method' => 'put', 'uri' => 'campaigns/{id}/Contacts']; //Send existing campaign To specific contacts
  const CAMPAIGNS_CONTACTS = ['method' => 'post', 'uri' => 'campaigns/Contacts']; //Create and Send a new campaign To specific contacts

  //Templates
  const TEMPLATES = ['method' => 'get', 'uri' => 'templates']; //Get all of your templates that are saved in "My templates"

}

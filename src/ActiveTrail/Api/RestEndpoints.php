<?php

/**
 * Class RestEndpoints
 *
 * @todo: Generalize.
 */
abstract class RestEndpoints {

  // Campaigns
  const CAMPAIGNS_ENDPOINT_URI = ['method' => 'post', 'endpoint' => 'campaigns']; //Create and return a new campaign
  const CAMPAIGNS_CONTACTS_ENDPOINT_URI = ['method' => 'post', 'endpoint' => 'campaigns/Contacts']; //Create and Send a new campaign To specific contacts
  const CAMPAIGNS_ID_CONTACTS_ENDPOINT_URI = ['method' => 'put', 'endpoint' => 'campaigns/{id}/Contacts']; //Send existing campaign To specific contacts

  


}
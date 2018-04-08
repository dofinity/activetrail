<?php

namespace ActiveTrail\Rest;

/**
 * Class RestEndpoints
 *
 * @todo: Generalize. Convert to constant arrays when PHP 5.6 arrives. Possibly convert to define when PHP 7 Arrives.
 */
abstract class EndPoints {

  // Base URI
  public static $API_BASE = ['method' => '', 'uri' => 'https://webapi.mymarketing.co.il/api/'];

  // Campaigns
  public static $CAMPAIGNS = ['method' => 'post', 'uri' => 'campaigns']; //Create and return a new campaign
  public static $CAMPAIGNS_ID_CONTACTS = ['method' => 'put', 'uri' => 'campaigns/:id/Contacts']; //Send existing campaign To specific contacts
  public static $CAMPAIGNS_CONTACTS = ['method' => 'post', 'uri' => 'campaigns/Contacts']; //Create and Send a new campaign To specific contacts
  public static $SMS_CAMPAIGNS = ['method' => 'post', 'uri' => 'smscampaign/OperationalMessage']; //Create and return a new sms campaign

  // Templates
  public static $TEMPLATES = ['method' => 'get', 'uri' => 'templates']; //Get all of your templates that are saved in "My templates"
  public static $TEMPLATE_DETAILS = ['method' => 'get', 'uri' => 'templates/:id']; //Get the details for a template by it's Id

  // Contacts
  public static $CONTACTS = ['method' => 'post', 'uri' => 'contacts']; // Create and return a new contact
  public static $CONTACTS_IMPORT = ['method' => 'post', 'uri' => 'contacts/import']; // Import contacts

  // Groups
  public static $GROUPS_MEMBER = ['method' => 'post', 'uri' => 'groups/:id/members']; // Get all of your templates that are saved in "My templates"

}

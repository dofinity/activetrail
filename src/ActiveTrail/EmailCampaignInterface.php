<?php

namespace ActiveTrail;

use ActiveTrail\Api\Contact\PostContactContainer;

/**
 * Class EmailCampaignInterface
 * @package ActiveTrail
 */
interface EmailCampaignInterface extends CampaignInterface {

  public function addContacts($emails);

  public function setSubject($subject);

  public function setPreHeader($preHeader);

  public function setTemplate($template_id);

  public function getMyTemplates();

  public function getTemplateDetails($template_id);

  public function setTemplateParams($params);

  /**
   * Returns a contact's Id by email.
   * If the contact is not found, he is created.
   *
   * @param $email
   * @return \JsonSerializable
   */
  public function getContactId($email);

  /**
   * Creates a contact or returns an existing contact.
   *
   * @param \ActiveTrail\Api\Contact\PostContactContainer $contact
   * @return mixed
   */
  public function createContact(PostContactContainer $contact);


}
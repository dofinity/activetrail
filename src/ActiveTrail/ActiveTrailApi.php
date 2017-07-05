<?php
/**
 * @file ActiveTrail main API class, allow to create and send campaigns, get and set templates.
 */
namespace Activetrail;

use Activetrail\ActiveTrailRequest;
use GuzzleHttp\Client;

class ActiveTrailApi {

  const API_BASE_URI = 'https://webapi.mymarketing.co.il/api/';
  const CONNECTION_TIMEOUT = 5;
  const REQUEST_TIMEOUT = 10;
  private $ActiveTrailRequest;

  /**
   * ActiveTrailApi constructor.
   * @param $ActiveTrailRequest
   */
  public function __construct(ActiveTrailRequest $ActiveTrailRequest) {
    $this->ActiveTrailRequest = $ActiveTrailRequest;
  }


  /**
   * Submits a payment request and receives back an iframe URL, a confirmation key, and possible errors.
   *
   *
   */
  public function CreateCampaign() {

    //ERP Post call
/*    $client = new Client(['base_uri' => self::API_BASE_URI]);


    $response = $client->post(self::API_BASE_URI,
      [
        'json' => json_encode($this->ActiveTrailRequest),
        'connect_timeout' => self::CONNECTION_TIMEOUT,
        'timeout' => self::REQUEST_TIMEOUT
      ]
    );*/

    //Extract the contents from the response.
    //return $response->getBody()->getContents();
  }

  /**
   * TBD
   */
  public function CreateSMSCampaign() {

  }



}

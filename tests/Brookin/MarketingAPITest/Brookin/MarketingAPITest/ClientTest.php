<?php
/**
 * Created by PhpStorm.
 * User: gavin
 * Date: 11/26/17
 * Time: 7:50 PM
 */

namespace Brookin\MarketingAPITest;

use Brookin\MarketingAPI\Advertiser\Advertiser;
use Brookin\MarketingAPI\Advertiser\AdvertiserGetRequest;
use Brookin\MarketingAPI\Advertiser\AdvertiserGetResponse;
use Brookin\MarketingAPI\Client;
use Brookin\MarketingAPI\Oauth\AuthorizeRequest;
use Brookin\MarketingAPI\Oauth\AuthorizeResponse;

class ClientTest extends \PHPUnit_Framework_TestCase
{

    public function testSend() {
        $request = new AdvertiserGetRequest();
        $request->setAccountId(1089);

        $response = new AdvertiserGetResponse();
        $client = new Advertiser();
        $client->get($request, $response);
    }

}

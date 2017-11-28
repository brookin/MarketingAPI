<?php
/**
 * Created by PhpStorm.
 * User: gavin
 * Date: 11/28/17
 * Time: 11:54 PM
 */

namespace Brookin\MarketingAPITest;

use Brookin\MarketingAPI\Advertiser\Advertiser;
use Brookin\MarketingAPI\Advertiser\AdvertiserGetRequest;
use Brookin\MarketingAPI\Advertiser\AdvertiserGetResponse;

class AdvertiserTest extends \PHPUnit_Framework_TestCase
{

    public function testSend() {
        $request = new AdvertiserGetRequest();
        $request->setAccountId(1089);

        $response = new AdvertiserGetResponse();
        $client = new Advertiser();
        $client->get($request, $response);
    }
}

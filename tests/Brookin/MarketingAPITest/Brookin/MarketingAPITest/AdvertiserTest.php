<?php
/**
 * Created by PhpStorm.
 * Date: 11/28/17
 * Time: 11:54 PM
 */

namespace Brookin\MarketingAPITest;

use Brookin\MarketingAPI\Advertiser\Advertiser;
use Brookin\MarketingAPI\Advertiser\AdvertiserAddRequest;
use Brookin\MarketingAPI\Advertiser\AdvertiserAddResponse;
use Brookin\MarketingAPI\Advertiser\AdvertiserGetRequest;
use Brookin\MarketingAPI\Advertiser\AdvertiserGetResponse;

class AdvertiserTest extends \PHPUnit_Framework_TestCase
{

    public function testAdd() {
        $request = new AdvertiserAddRequest();
        $response = new AdvertiserAddResponse();
        $client = new Advertiser();
        $request->certificationImageId = MARKETING_API_IMAGE_ID;
        $request->corporationName = '有限公司1';
        $request->website = 'http://www.qq.com';
        $request->industryQualificationImageIdList = [MARKETING_API_IMAGE_ID];
        $request->systemIndustryId = 21474836581;
        $client->add($request, $response);
        println($response);
    }

    public function testGet() {
        $request = new AdvertiserGetRequest();
        $request->setAccountId(MARKETING_API_AGENCY_ID);
        $response = new AdvertiserGetResponse();
        $client = new Advertiser();
        $client->get($request, $response);
    }
}

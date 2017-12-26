<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 10:29 AM
 */

namespace Brookin\MarketingAPITest;

use Brookin\MarketingAPI\Adcreative\AdcreativeService;
use Brookin\MarketingAPI\Adcreative\AdcreativeAddRequest;
use Brookin\MarketingAPI\Adcreative\AdcreativeAddResponse;
use Brookin\MarketingAPI\Adcreative\AdcreativeGetRequest;
use Brookin\MarketingAPI\Adcreative\AdcreativeGetResponse;
use Brookin\MarketingAPI\Adcreative\AdcreativeUpdateRequest;
use Brookin\MarketingAPI\Adcreative\AdcreativeUpdateResponse;

class AdcreativeTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd() {
        $request = new AdcreativeAddRequest();
        $response = new AdcreativeAddResponse();
        $request->accountId = MARKETING_API_ADVERTISER_ID;
        $request->campaignId = MARKETING_API_CAMPAIGN_ID;
        $request->adcreativeName = 'adcrt'.date('Y-m-d H:i:s');
        $request->adcreativeTemplateId = 2;
        $elements = [
            'image' => MARKETING_API_IMAGE_ID_160x210,
            'title' => 'title123',
        ];
        $request->adcreativeElements = json_encode($elements);
        $request->destinationUrl = 'http://www.baidu.com';
        $request->siteSet = ['SITE_SET_QZONE'];
        $request->productType = 'PRODUCT_TYPE_LINK';

        $service = new AdcreativeService();
        $service->add($request, $response);
        $this->assertAttributeGreaterThan(0, 'adcreativeId', $response, 'create adcreative error');
    }

    public function testUpdate() {
        $request = new AdcreativeUpdateRequest();
        $response = new AdcreativeUpdateResponse();
        $request->setAccountId(MARKETING_API_ADVERTISER_ID);
        $request->setAdcreativeName('adcrt-update'.date('Y-m-d H:i:s'));
        $request->setDestinationUrl('http://www.baidu.com');

        $service = new AdcreativeService();
        $service->update($request, $response);
        $this->assertAttributeGreaterThan(0, 'adcreativeId', $response, 'update adcreative error');
    }

    public function testGet() {
        $request = new AdcreativeGetRequest();
        $response = new AdcreativeGetResponse();
        $request->accountId = MARKETING_API_ADVERTISER_ID;
        $request->adcreativeId = MARKETING_API_ADCREATIVE_ID;

        $service = new AdcreativeService();
        $service->get($request, $response);
        $this->assertNotNull($response->getList(), 'get adcreative error');
    }

}

<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 10:29 AM
 */

namespace Brookin\MarketingAPITest;

use Brookin\MarketingAPI\Adcreative\Adcreative;
use Brookin\MarketingAPI\Adcreative\AdcreativeAddRequest;
use Brookin\MarketingAPI\Adcreative\AdcreativeAddResponse;

class AdcreativeTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd() {
        $request = new AdcreativeAddRequest();
        $response = new AdcreativeAddResponse();
        $request->accountId = MARKETING_API_ADVERTISER_ID;
        $request->campaignId = MARKETING_API_CAMPAIGN_ID;
        $request->adcreativeName = 'crt'.date('Y-m-d H:i:s');
        $request->adcreativeTemplateId = 2;
        $elements = [
            'image' => MARKETING_API_IMAGE_ID_CREATIVE160x210,
            'title' => 'title123',
        ];
        $request->adcreativeElements = json_encode($elements);
        $request->destinationUrl = 'http://www.baidu.com';
        $request->siteSet = ['SITE_SET_QZONE'];
        $request->productType = 'PRODUCT_TYPE_LINK';

        $service = new Adcreative();
        $service->add($request, $response);
    }

}

<?php
/**
 * Created by PhpStorm.
 * Date: 12/12/17
 * Time: 11:15 AM
 */

namespace Brookin\MarketingAPITest;

use Brookin\MarketingAPI\Ad\AdService;
use Brookin\MarketingAPI\Ad\AdAddRequest;
use Brookin\MarketingAPI\Ad\AdAddResponse;
use Brookin\MarketingAPI\Ad\AdGetRequest;
use Brookin\MarketingAPI\Ad\AdGetResponse;
use Brookin\MarketingAPI\Ad\AdUpdateRequest;
use Brookin\MarketingAPI\Ad\AdUpdateResponse;

class AdTest extends \PHPUnit_Framework_TestCase
{

    public function testAdd() {
        $request = new AdAddRequest();
        $response = new AdAddResponse();

        $request->accountId = MARKETING_API_ADVERTISER_ID;
        $request->adgroupId = MARKETING_API_ADGROUP_ID;
        $request->adcreativeId = MARKETING_API_ADCREATIVE_ID;
        $request->adName = 'adname'.date('Y-m-d H:i:s');
        $request->configuredStatus = 'AD_STATUS_NORMAL';

        $service = new AdService();
        $service->add($request, $response);
        $this->assertGreaterThan(0, $response->getAdId(), 'add ad error');
    }

    public function _testUpdate() {
        $request = new AdUpdateRequest();
        $response = new AdUpdateResponse();

        $request->accountId = MARKETING_API_ADVERTISER_ID;
        $request->setAdId(MARKETING_API_AD_ID);
        $request->adName = 'adname'.date('Y-m-d H:i:s');
        $service = new AdService();
        $service->update($request, $response);
        $this->assertGreaterThan(0, $response->getAdId(), 'update ad error');
    }

    public function testGet() {
        $request = new AdGetRequest();
        $response = new AdGetResponse();

        $request->accountId = MARKETING_API_ADVERTISER_ID;

        $service = new AdService();
        $service->get($request, $response);
        $this->assertNotNull($response->getList(), 'get ad error');
    }

}

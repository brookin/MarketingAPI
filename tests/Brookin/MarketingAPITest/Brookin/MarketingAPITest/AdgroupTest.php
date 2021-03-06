<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 10:28 AM
 */

namespace Brookin\MarketingAPITest;

use Brookin\MarketingAPI\Adgroup\AdgroupService;
use Brookin\MarketingAPI\Adgroup\AdgroupAddRequest;
use Brookin\MarketingAPI\Adgroup\AdgroupAddResponse;
use Brookin\MarketingAPI\Adgroup\AdgroupGetRequest;
use Brookin\MarketingAPI\Adgroup\AdgroupGetResponse;
use Brookin\MarketingAPI\Adgroup\AdgroupUpdateRequest;
use Brookin\MarketingAPI\Adgroup\AdgroupUpdateResponse;

class AdgroupTest extends \PHPUnit_Framework_TestCase
{

    public function testAdd() {
        $request = new AdgroupAddRequest();
        $response = new AdgroupAddResponse();
        $request->accountId = MARKETING_API_ADVERTISER_ID;
        $request->campaignId = MARKETING_API_CAMPAIGN_ID;
        $request->targetingId = MARKETING_API_TARGETING_ID;
        $request->adgroupName = 'adgroupName-'.date('Y-m-d H:i:s');
        $request->beginDate = date('Y-m-d');
        $request->endDate = date('Y-m-d');
        $request->siteSet = ['SITE_SET_QZONE'];
        $request->timeSeries = str_repeat('1', 336);
        $request->productType = 'PRODUCT_TYPE_LINK';
        $request->optimizationGoal = 'OPTIMIZATIONGOAL_CLICK';
        $request->billingEvent = 'BILLINGEVENT_CLICK';
        $request->bidAmount = 500;

        $service = new AdgroupService();
        $service->add($request, $response);
        $this->assertGreaterThan(0, $response->getAdgroupId(), 'add adgroup error');
    }

    public function testUpdate() {
        $request = new AdgroupUpdateRequest();
        $response = new AdgroupUpdateResponse();
        $request->accountId = MARKETING_API_ADVERTISER_ID;
        $request->adgroupId = MARKETING_API_ADGROUP_ID;
        $request->adgroupName = 'adgroupName update-'.date('Y-m-d H:i:s');

        $service = new AdgroupService();
        $service->update($request, $response);
        $this->assertGreaterThan(0, $response->getAdgroupId(), 'update adgroup error');
    }


    public function testGet() {
        $request = new AdgroupGetRequest();
        $response = new AdgroupGetResponse();
        $request->accountId = MARKETING_API_ADVERTISER_ID;
        $request->adgroupId = MARKETING_API_ADGROUP_ID;

        $service = new AdgroupService();
        $service->get($request, $response);
        $this->assertNotNull($response->getList(), 'get adgroup error');
    }


}

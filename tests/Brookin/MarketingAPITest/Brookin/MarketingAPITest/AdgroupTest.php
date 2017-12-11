<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 10:28 AM
 */

namespace Brookin\MarketingAPITest;

use Brookin\MarketingAPI\Adgroup\Adgroup;
use Brookin\MarketingAPI\Adgroup\AdgroupAddRequest;
use Brookin\MarketingAPI\Adgroup\AdgroupAddResponse;

class AdgroupTest extends \PHPUnit_Framework_TestCase
{

    public function testAdd() {
        $request = new AdgroupAddRequest();
        $response = new AdgroupAddResponse();
        $request->accountId = MARKETING_API_ADVERTISER_ID;
        $request->campaignId = 845;
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

        $service = new Adgroup();
        $service->add($request, $response);
    }

}

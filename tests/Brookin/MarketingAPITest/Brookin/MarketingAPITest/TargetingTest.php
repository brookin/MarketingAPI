<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 10:28 AM
 */

namespace Brookin\MarketingAPITest;

use Brookin\MarketingAPI\Targeting\Targeting;
use Brookin\MarketingAPI\Targeting\TargetingAddRequest;
use Brookin\MarketingAPI\Targeting\TargetingAddResponse;
use Brookin\MarketingAPI\Targeting\TargetingGetRequest;
use Brookin\MarketingAPI\Targeting\TargetingGetResponse;
use Brookin\MarketingAPI\Targeting\TargetingUpdateRequest;
use Brookin\MarketingAPI\Targeting\TargetingUpdateResponse;

class TargetingTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $request = new TargetingAddRequest();
        $response = new TargetingAddResponse();
        $request->accountId = MARKETING_API_ADVERTISER_ID;
        $request->targetingName = 'targetingName'.date('Y-m-d H:i:s');

        $service = new Targeting();
        $service->add($request, $response);
        println($response);
//        $response->targetingId = null;
        $this->assertNotNull($response->targetingId, __FUNCTION__);
    }

    public function testUpdate()
    {
        $request = new TargetingUpdateRequest();
        $response = new TargetingUpdateResponse();
        $request->accountId = MARKETING_API_ADVERTISER_ID;
        $request->targetingId = MARKETING_API_TARGETING_ID;
        $request->targetingName = 'targetingName-update'.date('Y-m-d H:i:s');

        $service = new Targeting();
        $service->update($request, $response);
    }

    public function testGet()
    {
        $request = new TargetingGetRequest();
        $response = new TargetingGetResponse();
        $request->accountId = MARKETING_API_ADVERTISER_ID;
        $request->targetingId = MARKETING_API_TARGETING_ID;

        $service = new Targeting();
        $service->get($request, $response);
    }

}

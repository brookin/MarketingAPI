<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 10:28 AM
 */

namespace Brookin\MarketingAPITest;

use Brookin\MarketingAPI\Targeting\TargetingDeleteRequest;
use Brookin\MarketingAPI\Targeting\TargetingDeleteResponse;
use Brookin\MarketingAPI\Targeting\TargetingService;
use Brookin\MarketingAPI\Targeting\TargetingAddRequest;
use Brookin\MarketingAPI\Targeting\TargetingAddResponse;
use Brookin\MarketingAPI\Targeting\TargetingGetRequest;
use Brookin\MarketingAPI\Targeting\TargetingGetResponse;
use Brookin\MarketingAPI\Targeting\TargetingTagsGetRequest;
use Brookin\MarketingAPI\Targeting\TargetingTagsGetResponse;
use Brookin\MarketingAPI\Targeting\TargetingTagsService;
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

        $service = new TargetingService();
        $service->add($request, $response);

        $this->assertNotNull($response->targetingId, __FUNCTION__);
    }

    public function testUpdate()
    {
        $request = new TargetingUpdateRequest();
        $response = new TargetingUpdateResponse();
        $request->accountId = MARKETING_API_ADVERTISER_ID;
        $request->targetingId = MARKETING_API_TARGETING_ID;
        $request->setTargetingName('targetingName-update'.date('Y-m-d H:i:s'));

        $service = new TargetingService();
        $service->update($request, $response);
        $this->assertGreaterThan(0, $response->getTargetingId(), 'update targeting error');
    }

    public function testGet()
    {
        $request = new TargetingGetRequest();
        $response = new TargetingGetResponse();
        $request->accountId = MARKETING_API_ADVERTISER_ID;
        $request->targetingId = MARKETING_API_TARGETING_ID;

        $service = new TargetingService();
        $service->get($request, $response);

        $this->assertNotNull($response->getList(), 'get targeting error');
    }

    public function testTags()
    {
        $request = new TargetingTagsGetRequest();
        $response = new TargetingTagsGetResponse();
        $request->setType('REGION');

        $service = new TargetingTagsService();
        $service->get($request, $response);

        $this->assertNotNull($response->getList(), 'get targeting tags error');
    }

    public function testDel()
    {
        $request = new TargetingDeleteRequest();
        $response = new TargetingDeleteResponse();
        $request->setAccountId(MARKETING_API_ADVERTISER_ID);
        $request->setTargetingId(MARKETING_API_TARGETING_ID);

        $service = new TargetingService();
        $service->delete($request, $response);

        $this->assertGreaterThan(0, $response->getTargetingId(), 'delete targeting error');
    }

}

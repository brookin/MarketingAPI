<?php


namespace Brookin\MarketingAPITest;


use Brookin\MarketingAPI\Adcreative\Adcreative;
use Brookin\MarketingAPI\Estimation\EstimationGetRequest;
use Brookin\MarketingAPI\Estimation\EstimationGetResponse;
use Brookin\MarketingAPI\Estimation\EstimationService;
use Brookin\MarketingAPI\Targeting\TargetingInfo;

class EstimationTest extends \PHPUnit_Framework_TestCase
{
    public function testGet()
    {
        $request = new EstimationGetRequest();
        $response = new EstimationGetResponse();
        $service = new EstimationService();

        $targeting = new TargetingInfo();

        $targeting->setAge(['16~50']);

        $request->setAccountId(MARKETING_API_ADVERTISER_ID);
        $request->setTargeting($targeting);

        $service->get($request, $response);
        $this->assertAttributeGreaterThanOrEqual(0, 'impression', $response, 'get estimation error');
    }
}
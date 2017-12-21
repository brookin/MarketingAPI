<?php


namespace Brookin\MarketingAPITest;


use Brookin\MarketingAPI\Filtering;
use Brookin\MarketingAPI\RealtimeCost\RealtimeCostGetRequest;
use Brookin\MarketingAPI\RealtimeCost\RealtimeCostGetResponse;
use Brookin\MarketingAPI\RealtimeCost\RealtimeCostService;

class RealtimeCostTest extends \PHPUnit_Framework_TestCase
{
    public function testGet()
    {
        $request = new RealtimeCostGetRequest();
        $response = new RealtimeCostGetResponse();
        $service = new RealtimeCostService();

        $request->setAccountId(MARKETING_API_ADVERTISER_ID);
        $request->setDate(date('Y-m-d', time()));
        $request->setLevel('ADVERTISER');

//        $filter = new Filtering();
//        $filter->setField()

        $service->get($request, $response);
        println($response);
    }
}
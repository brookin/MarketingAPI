<?php


namespace Brookin\MarketingAPITest;


use Brookin\MarketingAPI\DateRange;
use Brookin\MarketingAPI\UserData\UserActionSetAddRequest;
use Brookin\MarketingAPI\UserData\UserActionSetAddResponse;
use Brookin\MarketingAPI\UserData\UserActionSetGetRequest;
use Brookin\MarketingAPI\UserData\UserActionSetGetResponse;
use Brookin\MarketingAPI\UserData\UserActionSetReportGetRequest;
use Brookin\MarketingAPI\UserData\UserActionSetReportGetResponse;
use Brookin\MarketingAPI\UserData\UserActionSetReportService;
use Brookin\MarketingAPI\UserData\UserActionSetService;

class UserActionSetTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $request = new UserActionSetAddRequest();
        $response = new UserActionSetAddResponse();
        $service = new UserActionSetService();

        $request->setAccountId(MARKETING_API_ADVERTISER_ID);
        $request->setType('WEB');
        $request->setName('user_action_set' . rand(100,1000));
        $request->setDescription('test');

        $service->add($request, $response);
        println($response);
    }

    public function testGet()
    {
        $request = new UserActionSetGetRequest();
        $response = new UserActionSetGetResponse();
        $service = new UserActionSetService();

        $request->setAccountId(MARKETING_API_ADVERTISER_ID);
        $request->setUserActionSetId(MARKETING_API_USER_ACTION_SET_ID);

        $service->get($request, $response);
        println($response);
    }

    public function testReport()
    {
        $request = new UserActionSetReportGetRequest();
        $response = new UserActionSetReportGetResponse();
        $service = new UserActionSetReportService();

        $request->setAccountId(MARKETING_API_ADVERTISER_ID);
        $request->setUserActionSetId(MARKETING_API_USER_ACTION_SET_ID);
        $range = new DateRange();
        $range->setStartDate(date('Y-m-d', strtotime('-7 day')));
        $range->setEndDate(date('Y-m-d', time()));
        $request->setDateRange($range);
        $service->queryReport($request, $response);
        println($response);
    }
}
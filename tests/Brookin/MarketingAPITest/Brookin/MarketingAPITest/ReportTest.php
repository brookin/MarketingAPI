<?php


namespace Brookin\MarketingAPITest;


use Brookin\MarketingAPI\DateRange;
use Brookin\MarketingAPI\Report\DailyReportGetRequest;
use Brookin\MarketingAPI\Report\DailyReportGetResponse;
use Brookin\MarketingAPI\Report\DailyReportService;
use Brookin\MarketingAPI\Report\HourlyReportGetRequest;
use Brookin\MarketingAPI\Report\HourlyReportGetResponse;
use Brookin\MarketingAPI\Report\HourlyReportService;

class ReportTest extends \PHPUnit_Framework_TestCase
{
    public function testDaily()
    {
        $request = new DailyReportGetRequest();
        $response = new DailyReportGetResponse();
        $service = new DailyReportService();

        $range = new DateRange();
        $range->setStartDate(date('Y-m-d', strtotime('-7 day')));
        $range->setEndDate(date('Y-m-d', time()));

        $request->setAccountId(MARKETING_API_ADVERTISER_ID);
        $request->setLevel('ADVERTISER');
        $request->setDateRange($range);

        $service->getDaily($request, $response);
        $this->assertNotNull($response->getList(), 'get daily report error');
    }

    public function testHourly()
    {
        $request = new HourlyReportGetRequest();
        $response = new HourlyReportGetResponse();
        $service = new HourlyReportService();

        $request->setAccountId(MARKETING_API_ADVERTISER_ID);
        $request->setLevel('ADVERTISER');
        $request->setDate(date('Y-m-d', time()));

        $service->getHourly($request, $response);
        $this->assertNotNull($response->getList(), 'get hourly report error');
    }
}
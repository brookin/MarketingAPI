<?php


namespace Brookin\MarketingAPITest;


use Brookin\MarketingAPI\DateRange;
use Brookin\MarketingAPI\Fund\FundGetRequest;
use Brookin\MarketingAPI\Fund\FundGetResponse;
use Brookin\MarketingAPI\Fund\FundService;
use Brookin\MarketingAPI\Fund\FundStatementsDailyGetRequest;
use Brookin\MarketingAPI\Fund\FundStatementsDailyGetResponse;
use Brookin\MarketingAPI\Fund\FundStatementsDailyService;
use Brookin\MarketingAPI\Fund\FundStatementsDetailedGetRequest;
use Brookin\MarketingAPI\Fund\FundStatementsDetailedGetResponse;
use Brookin\MarketingAPI\Fund\FundStatementsDetailedService;
use Brookin\MarketingAPI\Fund\FundTransferAddRequest;
use Brookin\MarketingAPI\Fund\FundTransferAddResponse;
use Brookin\MarketingAPI\Fund\FundTransferService;

class FundTest extends \PHPUnit_Framework_TestCase
{
    public function testGet()
    {
        $request = new FundGetRequest();
        $response = new FundGetResponse();
        $service = new FundService();

        $request->setAccountId(MARKETING_API_ADVERTISER_ID);

        $service->get($request, $response);
        $this->assertNotNull($response->getList(), 'get fund error');
    }

    public function testStatementsDaily()
    {
        $request = new FundStatementsDailyGetRequest();
        $response = new FundStatementsDailyGetResponse();
        $service = new FundStatementsDailyService();

        $request->setAccountId(MARKETING_API_ADVERTISER_ID);
        $request->setDate(date('Y-m-d', time()));
        $request->setFundType('GENERAL_CASH');
        $request->setTradeType('CHARGE');

        $service->get($request, $response);
        $this->assertNotNull($response->getList(), 'get statements daily error');
    }

    public function testStatementsDetail()
    {
        $request = new FundStatementsDetailedGetRequest();
        $response = new FundStatementsDetailedGetResponse();
        $service = new FundStatementsDetailedService();

        $request->setAccountId(MARKETING_API_ADVERTISER_ID);
        $dataRange = new DateRange();
        $dataRange->setEndDate(date('Y-m-d', time()));
        $dataRange->setStartDate(date('Y-m-d', strtotime('-7 day')));

        $request->setDateRange($dataRange);
        $request->setFundType('GENERAL_CASH');

        $service->get($request, $response);
        $this->assertNotNull($response->getList(), 'get statements detail error');
    }

    public function testFundTransfer()
    {
        $request = new FundTransferAddRequest();
        $response = new FundTransferAddResponse();
        $service = new FundTransferService();

        $request->setAccountId(MARKETING_API_ADVERTISER_ID);
        $request->setAmount(5000);
        $request->setTransferType('AGENCY_TO_ADVERTISER');
        $request->setExternalBillNo('yesdat-' . rand(100000, 600000));
        $request->setFundType('GENERAL_CASH');
        $request->setMemo('账户转账');

        $service->add($request, $response);
        $this->assertGreaterThan(0, $response->getAmount(), 'fund transfer error');
    }
}
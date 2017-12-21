<?php


namespace Brookin\MarketingAPI\Fund;


use Brookin\MarketingAPI\Client;

class FundStatementsDailyService extends Client
{
    public function get(FundStatementsDailyGetRequest $request, FundStatementsDailyGetResponse $response)
    {
        $this->doGet($request, $response);
    }
}
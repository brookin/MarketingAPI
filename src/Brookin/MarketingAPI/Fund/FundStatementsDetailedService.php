<?php


namespace Brookin\MarketingAPI\Fund;


use Brookin\MarketingAPI\Client;

class FundStatementsDetailedService extends Client
{
    public function get(FundStatementsDetailedGetRequest $request, FundStatementsDetailedGetResponse $response)
    {
        $this->doGet($request, $response);
    }
}
<?php


namespace Brookin\MarketingAPI\Fund;


use Brookin\MarketingAPI\RestClient;

class FundService extends RestClient
{
    public function get(FundGetRequest $request, FundGetResponse $response)
    {
        parent::doGet($request, $response);
    }
}
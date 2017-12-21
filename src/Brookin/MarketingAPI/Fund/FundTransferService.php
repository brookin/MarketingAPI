<?php


namespace Brookin\MarketingAPI\Fund;


use Brookin\MarketingAPI\Client;

class FundTransferService extends Client
{
    public function add(FundTransferAddRequest $request, FundTransferAddResponse $response)
    {
        $this->doPost($request, $response);
    }
}
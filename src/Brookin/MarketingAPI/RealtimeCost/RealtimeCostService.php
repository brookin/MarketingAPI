<?php


namespace Brookin\MarketingAPI\RealtimeCost;


use Brookin\MarketingAPI\Client;

class RealtimeCostService extends Client
{
    public function get(RealtimeCostGetRequest $request, RealtimeCostGetResponse $response)
    {
        $this->doGet($request, $response);
    }
}
<?php


namespace Brookin\MarketingAPI\Estimation;


use Brookin\MarketingAPI\Client;

class EstimationService extends Client
{
    public function get(EstimationGetRequest $request, EstimationGetResponse $response)
    {
        $this->doPost($request, $response);
    }
}
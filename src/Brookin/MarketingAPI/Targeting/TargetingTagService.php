<?php


namespace Brookin\MarketingAPI\Targeting;


use Brookin\MarketingAPI\RestClient;

class TargetingTagService extends RestClient
{
    public function get(TargetingTagGetRequest $request, TargetingTagGetResponse $response)
    {
        $this->doGet($request, $response);
    }
}
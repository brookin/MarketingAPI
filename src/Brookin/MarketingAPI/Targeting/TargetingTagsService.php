<?php


namespace Brookin\MarketingAPI\Targeting;


use Brookin\MarketingAPI\Client;

class TargetingTagsService extends Client
{
    public function get(TargetingTagsGetRequest $request, TargetingTagsGetResponse $response)
    {
        $this->doGet($request, $response);
    }
}
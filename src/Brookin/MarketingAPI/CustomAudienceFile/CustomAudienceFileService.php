<?php


namespace Brookin\MarketingAPI\CustomAudienceFile;


use Brookin\MarketingAPI\RestClient;

class CustomAudienceFileService extends RestClient
{
    public function add(CustomAudienceFileAddRequest $request, CustomAudienceFileAddResponse $response)
    {
        $this->doPost($request, $response);
    }

    public function get(CustomAudienceFileGetRequest $request, CustomAudienceFileGetResponse $response)
    {
        $this->doGet($request, $response);
    }
}
<?php


namespace Brookin\MarketingAPI\CustomAudience;


use Brookin\MarketingAPI\RestClient;

class CustomAudienceService extends RestClient
{
    public function add(CustomAudienceAddRequest $request, CustomAudienceAddResponse $response)
    {
        $this->doPost($request, $response);
    }

    public function update(CustomAudienceUpdateRequest $request, CustomAudienceUpdateResponse $response)
    {
        $this->doPost($request, $response);
    }

    public function get(CustomAudienceGetRequest $request, CustomAudienceGetResponse $response)
    {
        $this->doGet($request, $response);
    }
}
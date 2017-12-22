<?php


namespace Brookin\MarketingAPI\UserData;


use Brookin\MarketingAPI\RestClient;

class UserActionSetReportService extends RestClient
{
    public function queryReport(UserActionSetReportGetRequest $request, UserActionSetReportGetResponse $response)
    {
        $this->doGet($request, $response);
    }
}
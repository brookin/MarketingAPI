<?php


namespace Brookin\MarketingAPI\Report;


use Brookin\MarketingAPI\RestClient;

class HourlyReportService extends RestClient
{
    public function getHourly(HourlyReportGetRequest $request, HourlyReportGetResponse $response) {
        $this->doGet($request, $response);
    }
}
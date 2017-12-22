<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:57 PM
 */

namespace Brookin\MarketingAPI\Report;


use Brookin\MarketingAPI\RestClient;

class DailyReportService extends RestClient
{

    public function getDaily(DailyReportGetRequest $request, DailyReportGetResponse $response) {
        $this->doGet($request, $response);
    }
}
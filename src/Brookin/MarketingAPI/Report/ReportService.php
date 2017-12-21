<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:57 PM
 */

namespace Brookin\MarketingAPI\Report;


class ReportService
{

    public function hourly(HourlyReportsGetRequest $request, HourlyReportsGetResponse $response) {
        $this->send(self::GET, $this->getPath(__METHOD__), $request, $response);
    }
}
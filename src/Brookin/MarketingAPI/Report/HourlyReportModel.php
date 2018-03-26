<?php


namespace Brookin\MarketingAPI\Report;


class HourlyReportModel extends BaseReportModel
{
    /**
     * @var string
     */
    protected $hour;

    /**
     * @return string
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * @param string $hour
     */
    public function setHour($hour)
    {
        $this->hour = $hour;
    }
}
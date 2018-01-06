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
<<<<<<< HEAD
=======


>>>>>>> 162b3b82c169cef42e6b92241aab7a6b43f06647
}
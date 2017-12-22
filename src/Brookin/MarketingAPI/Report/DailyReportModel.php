<?php


namespace Brookin\MarketingAPI\Report;


class DailyReportModel extends BaseReportModel
{
    /**
     * @var string
     */
    protected $date;

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string
     */
    public function setDate($date)
    {
        $this->date = $date;
    }


}
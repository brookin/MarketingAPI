<?php


namespace Brookin\MarketingAPI;


class DateRange
{
    /**
     * @var int
     */
    public $startDate;

    /**
     * @var int
     */
    public $endDate;

    /**
     * @return int
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param int $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return int
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param int $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }


}
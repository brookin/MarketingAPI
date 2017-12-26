<?php


namespace Brookin\MarketingAPI\CustomAudience;



class CrossCityRule
{
    /**
     * @var string[]
     */
    protected $route;

    /**
     * @var \Brookin\MarketingAPI\DateRange
     */
    protected $dateRange;

    /**
     * @var int
     */
    protected $frequency;

    /**
     * @return \string[]
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * @param \string[] $route
     */
    public function setRoute($route)
    {
        $this->route = $route;
    }

    /**
     * @return \Brookin\MarketingAPI\DateRange
     */
    public function getDateRange()
    {
        return $this->dateRange;
    }

    /**
     * @param \Brookin\MarketingAPI\DateRange $dateRange
     */
    public function setDateRange($dateRange)
    {
        $this->dateRange = $dateRange;
    }

    /**
     * @return int
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * @param int $frequency
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
    }


}
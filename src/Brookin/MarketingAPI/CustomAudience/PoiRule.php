<?php


namespace Brookin\MarketingAPI\CustomAudience;


class PoiRule
{
    /**
     * @var int[]
     */
    protected $regionId;

    /**
     * @var int[]
     */
    protected $poiCategoryId;

    /**
     * @var \Brookin\MarketingAPI\DateRange
     */
    protected $dateRange;

    /**
     * @var string[]
     */
    protected $dayOfWeek;

    /**
     * @var int
     */
    protected $frequency;

    /**
     * @return \int[]
     */
    public function getRegionId()
    {
        return $this->regionId;
    }

    /**
     * @param \int[] $regionId
     */
    public function setRegionId($regionId)
    {
        $this->regionId = $regionId;
    }

    /**
     * @return \int[]
     */
    public function getPoiCategoryId()
    {
        return $this->poiCategoryId;
    }

    /**
     * @param \int[] $poiCategoryId
     */
    public function setPoiCategoryId($poiCategoryId)
    {
        $this->poiCategoryId = $poiCategoryId;
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
     * @return \string[]
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * @param \string[] $dayOfWeek
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;
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
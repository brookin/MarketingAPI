<?php


namespace Brookin\MarketingAPI\Report;


use Brookin\MarketingAPI\DateRange;
use Brookin\MarketingAPI\Request;

class DailyReportGetRequest extends Request
{
    /**
     * @var int
     */
    protected $accountId;

    /**
     * @var string
     */
    protected $level;

    /**
     * @var DateRange
     */
    protected $dateRange;

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param int $accountId
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    /**
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param string $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @return DateRange
     */
    public function getDateRange()
    {
        return $this->dateRange;
    }

    /**
     * @param DateRange $dateRange
     */
    public function setDateRange($dateRange)
    {
        $this->dateRange = $dateRange;
    }


}
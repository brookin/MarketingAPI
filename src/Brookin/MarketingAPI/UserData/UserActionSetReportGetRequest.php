<?php


namespace Brookin\MarketingAPI\UserData;


use Brookin\MarketingAPI\DateRange;
use Brookin\MarketingAPI\Request;

class UserActionSetReportGetRequest extends Request
{
    /**
     * @var int
     */
    protected $accountId;

    /**
     * @var int
     */
    protected $userActionSetId;

    /**
     * @var DateRange
     */
    protected $dateRange;

    /**
     * @var string
     */
    protected $timeGranularity;

    /**
     * @var string
     */
    protected $aggregation;

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
     * @return int
     */
    public function getUserActionSetId()
    {
        return $this->userActionSetId;
    }

    /**
     * @param int $userActionSetId
     */
    public function setUserActionSetId($userActionSetId)
    {
        $this->userActionSetId = $userActionSetId;
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

    /**
     * @return string
     */
    public function getTimeGranularity()
    {
        return $this->timeGranularity;
    }

    /**
     * @param string $timeGranularity
     */
    public function setTimeGranularity($timeGranularity)
    {
        $this->timeGranularity = $timeGranularity;
    }

    /**
     * @return string
     */
    public function getAggregation()
    {
        return $this->aggregation;
    }

    /**
     * @param string $aggregation
     */
    public function setAggregation($aggregation)
    {
        $this->aggregation = $aggregation;
    }


}
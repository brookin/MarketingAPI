<?php


namespace Brookin\MarketingAPI\Fund;


use Brookin\MarketingAPI\DateRange;
use Brookin\MarketingAPI\Request;

class FundStatementsDetailedGetRequest extends Request
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $fundType;

    /**
     * @var DateRange
     */
    public $dateRange;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

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
    public function getFundType()
    {
        return $this->fundType;
    }

    /**
     * @param string $fundType
     */
    public function setFundType($fundType)
    {
        $this->fundType = $fundType;
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
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param int $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }


}
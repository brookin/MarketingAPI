<?php


namespace Brookin\MarketingAPI\Report;


use Brookin\MarketingAPI\DateRange;
use Brookin\MarketingAPI\Filtering;
use Brookin\MarketingAPI\OrderBy;
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
     * @var string[]
     */
    protected $groupBy;

    /**
     * @var OrderBy[]
     */
    protected $orderBy;

    /**
     * @var Filtering[]
     */
    protected $filtering;

    /**
     * @var int
     */
    protected $page;

    /**
     * @var int
     */
    protected $pagesize;

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

    /**
     * @return \string[]
     */
    public function getGroupBy()
    {
        return $this->groupBy;
    }

    /**
     * @param \string[] $groupBy
     */
    public function setGroupBy($groupBy)
    {
        $this->groupBy = $groupBy;
    }

    /**
     * @return Filtering[]
     */
    public function getFiltering()
    {
        return $this->filtering;
    }

    /**
     * @param Filtering[] $filtering
     */
    public function setFiltering($filtering)
    {
        $this->filtering = $filtering;
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
    public function getPagesize()
    {
        return $this->pagesize;
    }

    /**
     * @param int $pagesize
     */
    public function setPagesize($pagesize)
    {
        $this->pagesize = $pagesize;
    }

    /**
     * @return OrderBy[]
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     * @param OrderBy[] $orderBy
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
    }


}
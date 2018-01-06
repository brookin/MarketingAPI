<?php


namespace Brookin\MarketingAPI;


class GetRequest extends Request
{
    /**
     * @var \Brookin\MarketingAPI\DateRange
     */
    protected $dateRange;

    /**
     * @var \Brookin\MarketingAPI\Filtering
     */
    protected $filtering;

    /**
     * @var int
     */
    protected $page;

    /**
     * @var int
     */
    protected $pageSize;

    /**
     * @var string[]
     */
    protected $groupBy;

    /**
     * @var \Brookin\MarketingAPI\OrderBy
     */
    protected $orderBy;

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
     * @return Filtering
     */
    public function getFiltering()
    {
        return $this->filtering;
    }

    /**
     * @param Filtering $filtering
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
     * @return OrderBy
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     * @param OrderBy $orderBy
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
    }


}
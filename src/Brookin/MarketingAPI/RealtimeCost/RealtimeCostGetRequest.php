<?php


namespace Brookin\MarketingAPI\RealtimeCost;


use Brookin\MarketingAPI\Filtering;
use Brookin\MarketingAPI\Request;

class RealtimeCostGetRequest extends Request
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $date;

    /**
     * @var Filtering
     */
    public $filtering;

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
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
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


}
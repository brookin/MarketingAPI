<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:22 PM
 */

namespace Brookin\MarketingAPI\Adgroup;


use Brookin\MarketingAPI\Request;

class AdgroupGetRequest extends Request
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $adgroupId;

    /**
     * @var \Brookin\MarketingAPI\Filtering
     */
    public $filtering;

    /**
     * @var int
     */
    protected $page;

    /**
     * @var int
     */
    protected $pageSize;

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
    public function getAdgroupId()
    {
        return $this->adgroupId;
    }

    /**
     * @param int $adgroupId
     */
    public function setAdgroupId($adgroupId)
    {
        $this->adgroupId = $adgroupId;
    }

    /**
     * @return \Brookin\MarketingAPI\Filtering
     */
    public function getFiltering()
    {
        return $this->filtering;
    }

    /**
     * @param \Brookin\MarketingAPI\Filtering $filtering
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
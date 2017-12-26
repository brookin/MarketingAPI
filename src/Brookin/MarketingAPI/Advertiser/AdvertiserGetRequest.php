<?php
/**
 * Created by PhpStorm.
 * Date: 11/27/17
 * Time: 8:52 PM
 */

namespace Brookin\MarketingAPI\Advertiser;


use Brookin\MarketingAPI\Request;

class AdvertiserGetRequest extends Request
{
    /**
     * @var int
     */
    public $accountId;

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
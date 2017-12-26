<?php
/**
 * Created by PhpStorm.
 * Date: 12/7/17
 * Time: 7:39 PM
 */

namespace Brookin\MarketingAPI\Campaign;


use Brookin\MarketingAPI\Request;

class CampaignGetRequest extends Request
{

    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    protected $campaignId;

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
     * @return int
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * @param int $campaignId
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
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
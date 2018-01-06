<?php


namespace Brookin\MarketingAPI\CustomAudienceFile;


use Brookin\MarketingAPI\GetRequest;

class CustomAudienceFileGetRequest extends GetRequest
{
    /**
     * @var int
     */
    protected $accountId;

    /**
     * @var int
     */
    protected $audienceId;

    /**
     * @var int
     */
    protected $customAudienceFileId;


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
    public function getAudienceId()
    {
        return $this->audienceId;
    }

    /**
     * @param int $audienceId
     */
    public function setAudienceId($audienceId)
    {
        $this->audienceId = $audienceId;
    }

    /**
     * @return int
     */
    public function getCustomAudienceFileId()
    {
        return $this->customAudienceFileId;
    }

    /**
     * @param int $customAudienceFileId
     */
    public function setCustomAudienceFileId($customAudienceFileId)
    {
        $this->customAudienceFileId = $customAudienceFileId;
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
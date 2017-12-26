<?php


namespace Brookin\MarketingAPI\Image;


use Brookin\MarketingAPI\Request;

class ImageGetRequest extends Request
{
    /**
     * @var int
     */
    protected $accountId;

    /**
     * @var string
     */
    protected $imageId;

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
     * @return string
     */
    public function getImageId()
    {
        return $this->imageId;
    }

    /**
     * @param string $imageId
     */
    public function setImageId($imageId)
    {
        $this->imageId = $imageId;
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
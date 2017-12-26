<?php


namespace Brookin\MarketingAPI\Report;


use Brookin\MarketingAPI\DateRange;
use Brookin\MarketingAPI\Request;

class TrackingReportGetRequest extends Request
{
    /**
     * @var int
     */
    protected $accountId;

    /**
     * @var DateRange
     */
    protected $dateRange;

    /**
     * @var string
     */
    protected $productType;

    /**
     * @var string
     */
    protected $productRefsId;

    /**
     * @var string
     */
    protected $feedbackUrl;

    /**
     * @var int
     */
    protected $page;

    /**
     * @var string
     */
    protected $timeGranularity;

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
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @param string $productType
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
    }

    /**
     * @return string
     */
    public function getProductRefsId()
    {
        return $this->productRefsId;
    }

    /**
     * @param string $productRefsId
     */
    public function setProductRefsId($productRefsId)
    {
        $this->productRefsId = $productRefsId;
    }

    /**
     * @return string
     */
    public function getFeedbackUrl()
    {
        return $this->feedbackUrl;
    }

    /**
     * @param string $feedbackUrl
     */
    public function setFeedbackUrl($feedbackUrl)
    {
        $this->feedbackUrl = $feedbackUrl;
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
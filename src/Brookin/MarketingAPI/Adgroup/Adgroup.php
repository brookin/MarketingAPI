<?php


namespace Brookin\MarketingAPI\Adgroup;


class Adgroup
{
    /**
     * @var string
     */
    protected $campaignId;

    /**
     * @var string
     */
    protected $adgroupId;

    /**
     * @var string
     */
    protected $adgroupName;

    /**
     * @var string[]
     */
    protected $siteSet;

    /**
     * @var string
     */
    protected $optimizationGoal;

    /**
     * @var string
     */
    protected $billingEvent;

    /**
     * @var integer
     */
    protected $bidAmount;

    /**
     * @var integer
     */
    protected $dailyBudget;

    /**
     * @var string
     */
    protected $productType;

    /**
     * @var string
     */
    protected $targetingId;

    /**
     * @var string
     */
    protected $beginDate;

    /**
     * @var string
     */
    protected $endDate;

    /**
     * @var string
     */
    protected $timeSeries;

    /**
     * @var string
     */
    protected $configuredStatus;

    /**
     * @var string
     */
    protected $systemStatus;

    /**
     * @var string
     */
    protected $rejectMessage;

    /**
     * @var string
     */
    protected $customizedCategory;

    /**
     * @var integer
     */
    protected $createdTime;

    /**
     * @var integer
     */
    protected $lastModifiedTime;

    /**
     * @var integer
     */
    protected $frequencyCapping;

    /**
     * @var string
     */
    protected $productRefsId;

    /**
     * @var string
     */
    protected $subProductRefsId;

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
    public function getSubProductRefsId()
    {
        return $this->subProductRefsId;
    }

    /**
     * @param string $subProductRefsId
     */
    public function setSubProductRefsId($subProductRefsId)
    {
        $this->subProductRefsId = $subProductRefsId;
    }



    /**
     * @return string
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * @param string
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
    }

    /**
     * @return string
     */
    public function getAdgroupId()
    {
        return $this->adgroupId;
    }

    /**
     * @param string
     */
    public function setAdgroupId($adgroupId)
    {
        $this->adgroupId = $adgroupId;
    }

    /**
     * @return string
     */
    public function getAdgroupName()
    {
        return $this->adgroupName;
    }

    /**
     * @param string
     */
    public function setAdgroupName($adgroupName)
    {
        $this->adgroupName = $adgroupName;
    }

    /**
     * @return string[]
     */
    public function getSiteSet()
    {
        return $this->siteSet;
    }

    /**
     * @param string[]
     */
    public function setSiteSet($siteSet)
    {
        $this->siteSet = $siteSet;
    }

    /**
     * @return string
     */
    public function getOptimizationGoal()
    {
        return $this->optimizationGoal;
    }

    /**
     * @param string
     */
    public function setOptimizationGoal($optimizationGoal)
    {
        $this->optimizationGoal = $optimizationGoal;
    }

    /**
     * @return string
     */
    public function getBillingEvent()
    {
        return $this->billingEvent;
    }

    /**
     * @param string
     */
    public function setBillingEvent($billingEvent)
    {
        $this->billingEvent = $billingEvent;
    }

    /**
     * @return integer
     */
    public function getBidAmount()
    {
        return $this->bidAmount;
    }

    /**
     * @param integer
     */
    public function setBidAmount($bidAmount)
    {
        $this->bidAmount = $bidAmount;
    }

    /**
     * @return integer
     */
    public function getDailyBudget()
    {
        return $this->dailyBudget;
    }

    /**
     * @param integer
     */
    public function setDailyBudget($dailyBudget)
    {
        $this->dailyBudget = $dailyBudget;
    }

    /**
     * @return string
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @param string
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
    }

    /**
     * @return string
     */
    public function getTargetingId()
    {
        return $this->targetingId;
    }

    /**
     * @param string
     */
    public function setTargetingId($targetingId)
    {
        $this->targetingId = $targetingId;
    }

    /**
     * @return string
     */
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * @param string
     */
    public function setBeginDate($beginDate)
    {
        $this->beginDate = $beginDate;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param string
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return string
     */
    public function getTimeSeries()
    {
        return $this->timeSeries;
    }

    /**
     * @param string
     */
    public function setTimeSeries($timeSeries)
    {
        $this->timeSeries = $timeSeries;
    }

    /**
     * @return string
     */
    public function getConfiguredStatus()
    {
        return $this->configuredStatus;
    }

    /**
     * @param string
     */
    public function setConfiguredStatus($configuredStatus)
    {
        $this->configuredStatus = $configuredStatus;
    }

    /**
     * @return string
     */
    public function getSystemStatus()
    {
        return $this->systemStatus;
    }

    /**
     * @param string
     */
    public function setSystemStatus($systemStatus)
    {
        $this->systemStatus = $systemStatus;
    }

    /**
     * @return string
     */
    public function getRejectMessage()
    {
        return $this->rejectMessage;
    }

    /**
     * @param string
     */
    public function setRejectMessage($rejectMessage)
    {
        $this->rejectMessage = $rejectMessage;
    }

    /**
     * @return string
     */
    public function getCustomizedCategory()
    {
        return $this->customizedCategory;
    }

    /**
     * @param string
     */
    public function setCustomizedCategory($customizedCategory)
    {
        $this->customizedCategory = $customizedCategory;
    }

    /**
     * @return integer
     */
    public function getCreatedTime()
    {
        return $this->createdTime;
    }

    /**
     * @param integer
     */
    public function setCreatedTime($createdTime)
    {
        $this->createdTime = $createdTime;
    }

    /**
     * @return integer
     */
    public function getLastModifiedTime()
    {
        return $this->lastModifiedTime;
    }

    /**
     * @param integer
     */
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->lastModifiedTime = $lastModifiedTime;
    }

    /**
     * @return integer
     */
    public function getFrequencyCapping()
    {
        return $this->frequencyCapping;
    }

    /**
     * @param integer
     */
    public function setFrequencyCapping($frequencyCapping)
    {
        $this->frequencyCapping = $frequencyCapping;
    }
}
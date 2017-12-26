<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 9:08 AM
 */

namespace Brookin\MarketingAPI\Adgroup;


use Brookin\MarketingAPI\Request;

class AdgroupAddRequest extends Request
{

    /**
     * @var int
     * @required
     */
    public $accountId;

    /**
     * @var int
     * @required
     */
    public $campaignId;

    /**
     * @var string
     * @required
     */
    public $adgroupName;

    /**
     * @var string[]
     * @required
     */
    public $siteSet;

    /**
     * @var string
     * @required
     */
    public $productType;

    /**
     * @var string
     * @required
     */
    public $beginDate;

    /**
     * @var string
     * @required
     */
    public $endDate;

    /**
     * @var string
     * @required
     */
    public $billingEvent;

    /**
     * @var int
     * @required
     */
    public $bidAmount;

    /**
     * @var string
     * @required
     */
    public $optimizationGoal;


    /**
     * @var string
     * @optional
     */
    public $productRefsId;

    /**
     * @var string
     * @optional
     */
    public $subProductRefsId;

    /**
     * @var int
     * @optional
     */
    public $targetingId;

    /**
     * @var string
     * @optional
     */
    public $timeSeries;

    /**
     * @var string
     * @optional
     */
    public $configuredStatus;

    /**
     * @var string
     */
    protected $customizedCategory;

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
     * @return string
     */
    public function getAdgroupName()
    {
        return $this->adgroupName;
    }

    /**
     * @param string $adgroupName
     */
    public function setAdgroupName($adgroupName)
    {
        $this->adgroupName = $adgroupName;
    }

    /**
     * @return \string[]
     */
    public function getSiteSet()
    {
        return $this->siteSet;
    }

    /**
     * @param \string[] $siteSet
     */
    public function setSiteSet($siteSet)
    {
        $this->siteSet = $siteSet;
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
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * @param string $beginDate
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
     * @param string $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return string
     */
    public function getBillingEvent()
    {
        return $this->billingEvent;
    }

    /**
     * @param string $billingEvent
     */
    public function setBillingEvent($billingEvent)
    {
        $this->billingEvent = $billingEvent;
    }

    /**
     * @return int
     */
    public function getBidAmount()
    {
        return $this->bidAmount;
    }

    /**
     * @param int $bidAmount
     */
    public function setBidAmount($bidAmount)
    {
        $this->bidAmount = $bidAmount;
    }

    /**
     * @return string
     */
    public function getOptimizationGoal()
    {
        return $this->optimizationGoal;
    }

    /**
     * @param string $optimizationGoal
     */
    public function setOptimizationGoal($optimizationGoal)
    {
        $this->optimizationGoal = $optimizationGoal;
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
     * @return int
     */
    public function getTargetingId()
    {
        return $this->targetingId;
    }

    /**
     * @param int $targetingId
     */
    public function setTargetingId($targetingId)
    {
        $this->targetingId = $targetingId;
    }

    /**
     * @return string
     */
    public function getTimeSeries()
    {
        return $this->timeSeries;
    }

    /**
     * @param string $timeSeries
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
     * @param string $configuredStatus
     */
    public function setConfiguredStatus($configuredStatus)
    {
        $this->configuredStatus = $configuredStatus;
    }

    /**
     * @return string
     */
    public function getCustomizedCategory()
    {
        return $this->customizedCategory;
    }

    /**
     * @param string $customizedCategory
     */
    public function setCustomizedCategory($customizedCategory)
    {
        $this->customizedCategory = $customizedCategory;
    }


}
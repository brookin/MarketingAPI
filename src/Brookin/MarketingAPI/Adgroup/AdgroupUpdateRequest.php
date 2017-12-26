<?php
/**
 * Created by PhpStorm.
 * Date: 12/12/17
 * Time: 12:20 PM
 */

namespace Brookin\MarketingAPI\Adgroup;


use Brookin\MarketingAPI\Request;

class AdgroupUpdateRequest extends Request
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
     * @var string
     */
    public $adgroupName;

    /**
     * @var string
     */
    protected $optimizationGoal;

    /**
     * @var int
     */
    public $bidAmount;

    /**
     * @var int
     */
    protected $dailyBudget;

    /**
     * @var string
     */
    protected $subProductRefsId;

    /**
     * @var int
     */
    protected $targetingId;

    /**
     * @var \Brookin\MarketingAPI\Targeting\TargetingInfo
     */
    protected $targeting;

    /**
     * @var string
     */
    public $beginDate;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $timeSeries;

    /**
     * @var string
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
     * @return int
     */
    public function getDailyBudget()
    {
        return $this->dailyBudget;
    }

    /**
     * @param int $dailyBudget
     */
    public function setDailyBudget($dailyBudget)
    {
        $this->dailyBudget = $dailyBudget;
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
     * @return \Brookin\MarketingAPI\Targeting\TargetingInfo
     */
    public function getTargeting()
    {
        return $this->targeting;
    }

    /**
     * @param \Brookin\MarketingAPI\Targeting\TargetingInfo $targeting
     */
    public function setTargeting($targeting)
    {
        $this->targeting = $targeting;
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
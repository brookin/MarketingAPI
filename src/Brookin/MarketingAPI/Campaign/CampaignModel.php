<?php


namespace Brookin\MarketingAPI\Campaign;


class CampaignModel
{
    /**
     * @var string
     */
    protected $campaignId;

    /**
     * @var string
     */
    protected $campaignName;

    /**
     * @var string
     */
    protected $configuredStatus;

    /**
     * @var string
     */
    protected $campaignType;

    /**
     * @var string
     */
    protected $productType;

    /**
     * @var integer
     */
    protected $dailyBudget;

    /**
     * @var integer
     */
    protected $budgetReachDate;

    /**
     * @var integer
     */
    protected $createdTime;

    /**
     * @var integer
     */
    protected $lastModifiedTime;

    /**
     * @var string
     */
    protected $speedMode;


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
    public function getCampaignName()
    {
        return $this->campaignName;
    }

    /**
     * @param string
     */
    public function setCampaignName($campaignName)
    {
        $this->campaignName = $campaignName;
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
    public function getCampaignType()
    {
        return $this->campaignType;
    }

    /**
     * @param string
     */
    public function setCampaignType($campaignType)
    {
        $this->campaignType = $campaignType;
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
     * @return integer
     */
    public function getBudgetReachDate()
    {
        return $this->budgetReachDate;
    }

    /**
     * @param integer
     */
    public function setBudgetReachDate($budgetReachDate)
    {
        $this->budgetReachDate = $budgetReachDate;
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
     * @return string
     */
    public function getSpeedMode()
    {
        return $this->speedMode;
    }

    /**
     * @param string
     */
    public function setSpeedMode($speedMode)
    {
        $this->speedMode = $speedMode;
    }

}
<?php
/**
 * Created by PhpStorm.
 * Date: 12/7/17
 * Time: 4:42 PM
 */

namespace Brookin\MarketingAPI\Campaign;


use Brookin\MarketingAPI\Request;

class CampaignAddRequest extends Request
{

    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $campaignName;

    /**
     * @var string
     */
    public $campaignType;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var int
     */
    public $dailyBudget;

    /**
     * @var string
     */
    public $configuredStatus;

    /**
     * @var string
     */
    public $speedMode;

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
    public function getCampaignName()
    {
        return $this->campaignName;
    }

    /**
     * @param string $campaignName
     */
    public function setCampaignName($campaignName)
    {
        $this->campaignName = $campaignName;
    }

    /**
     * @return string
     */
    public function getCampaignType()
    {
        return $this->campaignType;
    }

    /**
     * @param string $campaignType
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
     * @param string $productType
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
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
    public function getSpeedMode()
    {
        return $this->speedMode;
    }

    /**
     * @param string $speedMode
     */
    public function setSpeedMode($speedMode)
    {
        $this->speedMode = $speedMode;
    }


}
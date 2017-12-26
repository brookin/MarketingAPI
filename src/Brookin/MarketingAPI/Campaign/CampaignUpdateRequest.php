<?php
/**
 * Created by PhpStorm.
 * Date: 12/7/17
 * Time: 7:34 PM
 */

namespace Brookin\MarketingAPI\Campaign;


use Brookin\MarketingAPI\Request;

class CampaignUpdateRequest extends Request
{

    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $campaignId;

    /**
     * @var string
     */
    public $campaignName;

    /**
     * @var int
     */
    public $dailyBudget;

    /**
     * @var string
     */
    protected $speedMode;

    /**
     * @var string
     */
    public $configuredStatus;

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
}
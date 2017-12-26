<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:37 PM
 */

namespace Brookin\MarketingAPI\Ad;


use Brookin\MarketingAPI\Request;

class AdAddRequest extends Request
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
     * @var int
     */
    public $adcreativeId;

    /**
     * @var string
     */
    public $adName;

    /**
     * @var string
     */
    public $configuredStatus;

    /**
     * @var string
     */
    protected $impressionTrackingUrl;

    /**
     * @var string
     */
    protected $clickTrackingUrl;

    /**
     * @var string
     */
    protected $feedsInteractionEnabled;

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
     * @return int
     */
    public function getAdcreativeId()
    {
        return $this->adcreativeId;
    }

    /**
     * @param int $adcreativeId
     */
    public function setAdcreativeId($adcreativeId)
    {
        $this->adcreativeId = $adcreativeId;
    }

    /**
     * @return string
     */
    public function getAdName()
    {
        return $this->adName;
    }

    /**
     * @param string $adName
     */
    public function setAdName($adName)
    {
        $this->adName = $adName;
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
    public function getImpressionTrackingUrl()
    {
        return $this->impressionTrackingUrl;
    }

    /**
     * @param string $impressionTrackingUrl
     */
    public function setImpressionTrackingUrl($impressionTrackingUrl)
    {
        $this->impressionTrackingUrl = $impressionTrackingUrl;
    }

    /**
     * @return string
     */
    public function getClickTrackingUrl()
    {
        return $this->clickTrackingUrl;
    }

    /**
     * @param string $clickTrackingUrl
     */
    public function setClickTrackingUrl($clickTrackingUrl)
    {
        $this->clickTrackingUrl = $clickTrackingUrl;
    }

    /**
     * @return string
     */
    public function getFeedsInteractionEnabled()
    {
        return $this->feedsInteractionEnabled;
    }

    /**
     * @param string $feedsInteractionEnabled
     */
    public function setFeedsInteractionEnabled($feedsInteractionEnabled)
    {
        $this->feedsInteractionEnabled = $feedsInteractionEnabled;
    }


}
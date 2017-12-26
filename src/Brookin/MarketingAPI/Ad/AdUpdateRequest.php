<?php
/**
 * Created by PhpStorm.
 * Date: 12/12/17
 * Time: 2:59 PM
 */

namespace Brookin\MarketingAPI\Ad;


use Brookin\MarketingAPI\Request;

class AdUpdateRequest extends Request
{

    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $adId;

    /**
     * @var string
     */
    public $adName;

    /**
     * @var string
     */
    protected $configuredStatus;

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
    public function getAdId()
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     */
    public function setAdId($adId)
    {
        $this->adId = $adId;
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
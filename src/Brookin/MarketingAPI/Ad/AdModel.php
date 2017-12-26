<?php


namespace Brookin\MarketingAPI\Ad;



class AdModel
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
    protected $adId;

    /**
     * @var string
     */
    protected $adName;

    /**
     * @var \Brookin\MarketingAPI\Adcreative\Adcreative
     */
    protected $adcreative;

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
     * @var string
     */
    protected $rejectMessage;

    /**
     * @var integer
     */
    protected $createdTime;

    /**
     * @var integer
     */
    protected $lastModifiedTime;


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
    public function getAdId()
    {
        return $this->adId;
    }

    /**
     * @param string
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
     * @param string
     */
    public function setAdName($adName)
    {
        $this->adName = $adName;
    }

    /**
     * @return \Brookin\MarketingAPI\Adcreative\Adcreative
     */
    public function getAdcreative()
    {
        return $this->adcreative;
    }

    /**
     * @param \Brookin\MarketingAPI\Adcreative\Adcreative
     */
    public function setAdcreative($adcreative)
    {
        $this->adcreative = $adcreative;
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
    public function getImpressionTrackingUrl()
    {
        return $this->impressionTrackingUrl;
    }

    /**
     * @param string
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
     * @param string
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
     * @param string
     */
    public function setFeedsInteractionEnabled($feedsInteractionEnabled)
    {
        $this->feedsInteractionEnabled = $feedsInteractionEnabled;
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

}
<?php


namespace Brookin\MarketingAPI\Report;


class BaseReportModel
{
    /**
     * @var integer
     */
    protected $impression;

    /**
     * @var integer
     */
    protected $campaignId;

    /**
     * @var integer
     */
    protected $adgroupId;

    /**
     * @var integer
     */
    protected $click;

    /**
     * @var integer
     */
    protected $cost;

    /**
     * @var integer
     */
    protected $download;

    /**
     * @var integer
     */
    protected $conversion;

    /**
     * @var integer
     */
    protected $activation;

    /**
     * @var integer
     */
    protected $likeOrComment;

    /**
     * @var integer
     */
    protected $imageClick;

    /**
     * @var integer
     */
    protected $follow;

    /**
     * @var integer
     */
    protected $share;

    /**
     * @var integer
     */
    protected $appPaymentCount;

    /**
     * @var integer
     */
    protected $appPaymentAmount;

    /**
     * @return int
     */
    public function getImpression()
    {
        return $this->impression;
    }

    /**
     * @param int $impression
     */
    public function setImpression($impression)
    {
        $this->impression = $impression;
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
    public function getClick()
    {
        return $this->click;
    }

    /**
     * @param int $click
     */
    public function setClick($click)
    {
        $this->click = $click;
    }

    /**
     * @return int
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param int $cost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    /**
     * @return int
     */
    public function getDownload()
    {
        return $this->download;
    }

    /**
     * @param int $download
     */
    public function setDownload($download)
    {
        $this->download = $download;
    }

    /**
     * @return int
     */
    public function getConversion()
    {
        return $this->conversion;
    }

    /**
     * @param int $conversion
     */
    public function setConversion($conversion)
    {
        $this->conversion = $conversion;
    }

    /**
     * @return int
     */
    public function getActivation()
    {
        return $this->activation;
    }

    /**
     * @param int $activation
     */
    public function setActivation($activation)
    {
        $this->activation = $activation;
    }

    /**
     * @return int
     */
    public function getLikeOrComment()
    {
        return $this->likeOrComment;
    }

    /**
     * @param int $likeOrComment
     */
    public function setLikeOrComment($likeOrComment)
    {
        $this->likeOrComment = $likeOrComment;
    }

    /**
     * @return int
     */
    public function getImageClick()
    {
        return $this->imageClick;
    }

    /**
     * @param int $imageClick
     */
    public function setImageClick($imageClick)
    {
        $this->imageClick = $imageClick;
    }

    /**
     * @return int
     */
    public function getFollow()
    {
        return $this->follow;
    }

    /**
     * @param int $follow
     */
    public function setFollow($follow)
    {
        $this->follow = $follow;
    }

    /**
     * @return int
     */
    public function getShare()
    {
        return $this->share;
    }

    /**
     * @param int $share
     */
    public function setShare($share)
    {
        $this->share = $share;
    }

    /**
     * @return int
     */
    public function getAppPaymentCount()
    {
        return $this->appPaymentCount;
    }

    /**
     * @param int $appPaymentCount
     */
    public function setAppPaymentCount($appPaymentCount)
    {
        $this->appPaymentCount = $appPaymentCount;
    }

    /**
     * @return int
     */
    public function getAppPaymentAmount()
    {
        return $this->appPaymentAmount;
    }

    /**
     * @param int $appPaymentAmount
     */
    public function setAppPaymentAmount($appPaymentAmount)
    {
        $this->appPaymentAmount = $appPaymentAmount;
    }


}
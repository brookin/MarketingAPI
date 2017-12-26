<?php


namespace Brookin\MarketingAPI\Estimation;


use Brookin\MarketingAPI\Response;

class EstimationGetResponse extends Response
{
    /**
     * @var integer
     */
    protected $approximateCount;

    /**
     * @var integer
     */
    protected $impression;

    /**
     * @var integer
     */
    protected $minBidAmount;

    /**
     * @var integer
     */
    protected $maxBidAmount;


    /**
     * @return integer
     */
    public function getApproximateCount()
    {
        return $this->approximateCount;
    }

    /**
     * @param integer
     */
    public function setApproximateCount($approximateCount)
    {
        $this->approximateCount = $approximateCount;
    }

    /**
     * @return integer
     */
    public function getImpression()
    {
        return $this->impression;
    }

    /**
     * @param integer
     */
    public function setImpression($impression)
    {
        $this->impression = $impression;
    }

    /**
     * @return integer
     */
    public function getMinBidAmount()
    {
        return $this->minBidAmount;
    }

    /**
     * @param integer
     */
    public function setMinBidAmount($minBidAmount)
    {
        $this->minBidAmount = $minBidAmount;
    }

    /**
     * @return integer
     */
    public function getMaxBidAmount()
    {
        return $this->maxBidAmount;
    }

    /**
     * @param integer
     */
    public function setMaxBidAmount($maxBidAmount)
    {
        $this->maxBidAmount = $maxBidAmount;
    }
}
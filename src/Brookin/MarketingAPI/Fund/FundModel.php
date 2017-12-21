<?php


namespace Brookin\MarketingAPI\Fund;


class FundModel
{
    /**
     * @var string
     */
    protected $fundType;

    /**
     * @var integer
     */
    protected $balance;

    /**
     * @var string
     */
    protected $fundStatus;

    /**
     * @var integer
     */
    protected $realtimeCost;


    /**
     * @return string
     */
    public function getFundType()
    {
        return $this->fundType;
    }

    /**
     * @param string
     */
    public function setFundType($fundType)
    {
        $this->fundType = $fundType;
    }

    /**
     * @return integer
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param integer
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * @return string
     */
    public function getFundStatus()
    {
        return $this->fundStatus;
    }

    /**
     * @param string
     */
    public function setFundStatus($fundStatus)
    {
        $this->fundStatus = $fundStatus;
    }

    /**
     * @return integer
     */
    public function getRealtimeCost()
    {
        return $this->realtimeCost;
    }

    /**
     * @param integer
     */
    public function setRealtimeCost($realtimeCost)
    {
        $this->realtimeCost = $realtimeCost;
    }
}
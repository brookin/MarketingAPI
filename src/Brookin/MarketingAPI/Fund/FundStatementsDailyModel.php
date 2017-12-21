<?php


namespace Brookin\MarketingAPI\Fund;


class FundStatementsDailyModel
{
    /**
     * @var string
     */
    protected $fundType;

    /**
     * @var string
     */
    protected $tradeType;

    /**
     * @var integer
     */
    protected $time;

    /**
     * @var integer
     */
    protected $amount;

    /**
     * @var string
     */
    protected $description;


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
     * @return string
     */
    public function getTradeType()
    {
        return $this->tradeType;
    }

    /**
     * @param string
     */
    public function setTradeType($tradeType)
    {
        $this->tradeType = $tradeType;
    }

    /**
     * @return integer
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param integer
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return integer
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param integer
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}
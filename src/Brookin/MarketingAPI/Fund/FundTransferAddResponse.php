<?php


namespace Brookin\MarketingAPI\Fund;


use Brookin\MarketingAPI\Response;

class FundTransferAddResponse extends Response
{
    /**
     * @var string
     */
    protected $fundType;

    /**
     * @var integer
     */
    protected $amount;

    /**
     * @var string
     */
    protected $externalBillNo;

    /**
     * @var integer
     */
    protected $time;

    /**
     * @var boolean
     */
    protected $isRepeated;


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
    public function getExternalBillNo()
    {
        return $this->externalBillNo;
    }

    /**
     * @param string
     */
    public function setExternalBillNo($externalBillNo)
    {
        $this->externalBillNo = $externalBillNo;
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
     * @return boolean
     */
    public function getIsRepeated()
    {
        return $this->isRepeated;
    }

    /**
     * @param boolean
     */
    public function setIsRepeated($isRepeated)
    {
        $this->isRepeated = $isRepeated;
    }
}
<?php


namespace Brookin\MarketingAPI\Fund;


class FundStatementsDetailedModel
{

    /**
     * @var string
     */
    protected $date;

    /**
     * @var string
     */
    protected $externalBillNo;

    /**
     * @var string
     */
    protected $tradeType;

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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string
     */
    public function setDate($date)
    {
        $this->date = $date;
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
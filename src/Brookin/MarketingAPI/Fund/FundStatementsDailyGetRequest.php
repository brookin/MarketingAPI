<?php


namespace Brookin\MarketingAPI\Fund;


use Brookin\MarketingAPI\Request;

class FundStatementsDailyGetRequest extends Request
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $fundType;

    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $tradeType;

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
     * @return string
     */
    public function getFundType()
    {
        return $this->fundType;
    }

    /**
     * @param string $fundType
     */
    public function setFundType($fundType)
    {
        $this->fundType = $fundType;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getTradeType()
    {
        return $this->tradeType;
    }

    /**
     * @param string $tradeType
     */
    public function setTradeType($tradeType)
    {
        $this->tradeType = $tradeType;
    }

}
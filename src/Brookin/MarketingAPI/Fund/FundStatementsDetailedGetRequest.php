<?php


namespace Brookin\MarketingAPI\Fund;


use Brookin\MarketingAPI\GetRequest;

class FundStatementsDetailedGetRequest extends GetRequest
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



}
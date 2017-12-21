<?php


namespace Brookin\MarketingAPI\Fund;


use Brookin\MarketingAPI\Request;

class FundGetRequest extends Request
{
    /**
     * @var int
     */
    public $accountId;

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


}
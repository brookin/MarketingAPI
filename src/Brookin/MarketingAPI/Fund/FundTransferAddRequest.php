<?php


namespace Brookin\MarketingAPI\Fund;


use Brookin\MarketingAPI\Request;

class FundTransferAddRequest extends Request
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
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $transferType;

    /**
     * @var string
     */
    public $externalBillNo;

    /**
     * @var string
     */
    public $memo;

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
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getTransferType()
    {
        return $this->transferType;
    }

    /**
     * @param string $transferType
     */
    public function setTransferType($transferType)
    {
        $this->transferType = $transferType;
    }

    /**
     * @return string
     */
    public function getExternalBillNo()
    {
        return $this->externalBillNo;
    }

    /**
     * @param string $externalBillNo
     */
    public function setExternalBillNo($externalBillNo)
    {
        $this->externalBillNo = $externalBillNo;
    }

    /**
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * @param string $memo
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
    }


}
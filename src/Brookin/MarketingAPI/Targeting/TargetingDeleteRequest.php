<?php


namespace Brookin\MarketingAPI\Targeting;


use Brookin\MarketingAPI\Request;

class TargetingDeleteRequest extends Request
{
    /**
     * @var int
     */
    protected $accountId;

    /**
     * @var int
     */
    protected $targetingId;

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
     * @return int
     */
    public function getTargetingId()
    {
        return $this->targetingId;
    }

    /**
     * @param int $targetingId
     */
    public function setTargetingId($targetingId)
    {
        $this->targetingId = $targetingId;
    }


}
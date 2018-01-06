<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:17 PM
 */

namespace Brookin\MarketingAPI\Targeting;


use Brookin\MarketingAPI\GetRequest;

class TargetingGetRequest extends GetRequest
{

    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $targetingId;


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
<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:23 PM
 */

namespace Brookin\MarketingAPI\Adcreative;


use Brookin\MarketingAPI\GetRequest;

class AdcreativeGetRequest extends GetRequest
{

    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $adcreativeId;



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
    public function getAdcreativeId()
    {
        return $this->adcreativeId;
    }

    /**
     * @param int $adcreativeId
     */
    public function setAdcreativeId($adcreativeId)
    {
        $this->adcreativeId = $adcreativeId;
    }


}
<?php
/**
 * Created by PhpStorm.
 * Date: 12/12/17
 * Time: 2:59 PM
 */

namespace Brookin\MarketingAPI\Ad;


use Brookin\MarketingAPI\GetRequest;

class AdGetRequest extends GetRequest
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $adId;



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
    public function getAdId()
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     */
    public function setAdId($adId)
    {
        $this->adId = $adId;
    }


}
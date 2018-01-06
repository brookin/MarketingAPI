<?php
/**
 * Created by PhpStorm.
 * Date: 11/27/17
 * Time: 8:52 PM
 */

namespace Brookin\MarketingAPI\Advertiser;


use Brookin\MarketingAPI\GetRequest;

class AdvertiserGetRequest extends GetRequest
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
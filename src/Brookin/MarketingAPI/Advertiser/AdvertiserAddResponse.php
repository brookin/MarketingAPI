<?php
/**
 * Created by PhpStorm.
 * Date: 11/28/17
 * Time: 11:50 PM
 */

namespace Brookin\MarketingAPI\Advertiser;


use Brookin\MarketingAPI\Response;

class AdvertiserAddResponse extends Response
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
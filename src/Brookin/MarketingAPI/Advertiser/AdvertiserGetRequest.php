<?php
/**
 * Created by PhpStorm.
 * Date: 11/27/17
 * Time: 8:52 PM
 */

namespace Brookin\MarketingAPI\Advertiser;


use Brookin\MarketingAPI\Request;

class AdvertiserGetRequest extends Request
{
    /**
     * @var int
     */
    private $accountId;

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
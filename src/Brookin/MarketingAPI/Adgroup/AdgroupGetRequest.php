<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:22 PM
 */

namespace Brookin\MarketingAPI\Adgroup;


use Brookin\MarketingAPI\GetRequest;

class AdgroupGetRequest extends GetRequest
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $adgroupId;


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
    public function getAdgroupId()
    {
        return $this->adgroupId;
    }

    /**
     * @param int $adgroupId
     */
    public function setAdgroupId($adgroupId)
    {
        $this->adgroupId = $adgroupId;
    }


}
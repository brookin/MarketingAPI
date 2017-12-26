<?php
/**
 * Created by PhpStorm.
 * Date: 12/12/17
 * Time: 12:20 PM
 */

namespace Brookin\MarketingAPI\Adgroup;


use Brookin\MarketingAPI\Response;

class AdgroupUpdateResponse extends Response
{

    /**
     * @var int
     */
    public $adgroupId;

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
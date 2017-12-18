<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 9:26 AM
 */

namespace Brookin\MarketingAPI\Adgroup;


use Brookin\MarketingAPI\Response;

class AdgroupAddResponse extends Response
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
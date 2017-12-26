<?php


namespace Brookin\MarketingAPI\Adgroup;


use Brookin\MarketingAPI\Response;

class AdgroupDeleteResponse extends Response
{
    /**
     * @var int
     */
    protected $adgroupId;

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
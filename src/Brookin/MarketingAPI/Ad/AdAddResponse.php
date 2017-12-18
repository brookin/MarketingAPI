<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:38 PM
 */

namespace Brookin\MarketingAPI\Ad;


use Brookin\MarketingAPI\Response;

class AdAddResponse extends Response
{
    /**
     * @var int
     */
    public $adId;

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
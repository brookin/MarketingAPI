<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 9:30 AM
 */

namespace Brookin\MarketingAPI\Adcreative;


use Brookin\MarketingAPI\Response;

class AdcreativeAddResponse extends Response
{

    /**
     * @var int
     */
    public $adcreativeId;

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
<?php
/**
 * Created by PhpStorm.
 * Date: 12/12/17
 * Time: 12:23 PM
 */

namespace Brookin\MarketingAPI\Adcreative;


use Brookin\MarketingAPI\Request;
use Brookin\MarketingAPI\Response;

class AdcreativeUpdateResponse extends Response
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
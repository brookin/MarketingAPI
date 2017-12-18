<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 10:27 AM
 */

namespace Brookin\MarketingAPI\Targeting;


use Brookin\MarketingAPI\Response;

class TargetingAddResponse extends Response
{

    /**
     * @var int
     */
    public $targetingId;

    /**
     * @return int
     */
    public function getTargetingId()
    {
        return $this->targetingId;
    }

    /**
     * @param int $targetingId
     */
    public function setTargetingId($targetingId)
    {
        $this->targetingId = $targetingId;
    }


}
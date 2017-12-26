<?php


namespace Brookin\MarketingAPI\Targeting;


use Brookin\MarketingAPI\Response;

class TargetingDeleteResponse extends Response
{
    /**
     * @var int
     */
    protected $targetingId;

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
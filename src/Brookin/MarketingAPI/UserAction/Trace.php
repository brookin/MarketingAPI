<?php


namespace Brookin\MarketingAPI\UserAction;


class Trace
{
    /**
     * @var string
     */
    protected $clickId;

    /**
     * @return string
     */
    public function getClickId()
    {
        return $this->clickId;
    }

    /**
     * @param string $clickId
     */
    public function setClickId($clickId)
    {
        $this->clickId = $clickId;
    }


}
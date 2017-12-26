<?php


namespace Brookin\MarketingAPI\CustomAudience;


use Brookin\MarketingAPI\Response;

class CustomAudienceAddResponse extends Response
{
    /**
     * @var int
     */
    protected $audienceId;

    /**
     * @return int
     */
    public function getAudienceId()
    {
        return $this->audienceId;
    }

    /**
     * @param int $audienceId
     */
    public function setAudienceId($audienceId)
    {
        $this->audienceId = $audienceId;
    }


}
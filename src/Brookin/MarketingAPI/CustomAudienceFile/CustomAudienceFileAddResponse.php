<?php


namespace Brookin\MarketingAPI\CustomAudienceFile;


use Brookin\MarketingAPI\Response;

class CustomAudienceFileAddResponse extends Response
{
    /**
     * @var int
     */
    protected $customAudienceFileId;

    /**
     * @return int
     */
    public function getCustomAudienceFileId()
    {
        return $this->customAudienceFileId;
    }

    /**
     * @param int $customAudienceFileId
     */
    public function setCustomAudienceFileId($customAudienceFileId)
    {
        $this->customAudienceFileId = $customAudienceFileId;
    }


}
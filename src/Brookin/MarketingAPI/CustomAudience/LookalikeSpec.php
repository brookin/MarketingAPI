<?php


namespace Brookin\MarketingAPI\CustomAudience;


class LookalikeSpec
{
    /**
     * @var int
     */
    protected $seedAudienceId;

    /**
     * @var int
     */
    protected $expandUserCount;

    /**
     * @return int
     */
    public function getSeedAudienceId()
    {
        return $this->seedAudienceId;
    }

    /**
     * @param int $seedAudienceId
     */
    public function setSeedAudienceId($seedAudienceId)
    {
        $this->seedAudienceId = $seedAudienceId;
    }

    /**
     * @return int
     */
    public function getExpandUserCount()
    {
        return $this->expandUserCount;
    }

    /**
     * @param int $expandUserCount
     */
    public function setExpandUserCount($expandUserCount)
    {
        $this->expandUserCount = $expandUserCount;
    }


}
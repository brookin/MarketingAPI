<?php


namespace Brookin\MarketingAPI\Video;


use Brookin\MarketingAPI\Request;

class VideoGetRequest extends Request
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $videoId;

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param int $accountId
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    /**
     * @return int
     */
    public function getVideoId()
    {
        return $this->videoId;
    }

    /**
     * @param int $videoId
     */
    public function setVideoId($videoId)
    {
        $this->videoId = $videoId;
    }


}
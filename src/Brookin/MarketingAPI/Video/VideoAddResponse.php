<?php


namespace Brookin\MarketingAPI\Video;


use Brookin\MarketingAPI\Response;

class VideoAddResponse extends Response
{
    /**
     * @var string
     */
    protected $videoId;

    /**
     * @var integer
     */
    protected $repeat;


    /**
     * @return string
     */
    public function getVideoId()
    {
        return $this->videoId;
    }

    /**
     * @param string
     */
    public function setVideoId($videoId)
    {
        $this->videoId = $videoId;
    }

    /**
     * @return integer
     */
    public function getRepeat()
    {
        return $this->repeat;
    }

    /**
     * @param integer
     */
    public function setRepeat($repeat)
    {
        $this->repeat = $repeat;
    }
}
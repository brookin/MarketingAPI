<?php


namespace Brookin\MarketingAPI\Video;


use Brookin\MarketingAPI\Response;

class VideoGetResponse extends Response
{
    /**
     * @var string
     */
    protected $videoId;

    /**
     * @var integer
     */
    protected $width;

    /**
     * @var integer
     */
    protected $height;

    /**
     * @var integer
     */
    protected $videoFrames;

    /**
     * @var integer
     */
    protected $videoFps;

    /**
     * @var string
     */
    protected $videoCodec;

    /**
     * @var integer
     */
    protected $videoBitRate;

    /**
     * @var string
     */
    protected $audioCodec;

    /**
     * @var integer
     */
    protected $audioBitRate;

    /**
     * @var integer
     */
    protected $fileSize;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $signature;

    /**
     * @var string
     */
    protected $systemStatus;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $previewUrl;


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
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param integer
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param integer
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return integer
     */
    public function getVideoFrames()
    {
        return $this->videoFrames;
    }

    /**
     * @param integer
     */
    public function setVideoFrames($videoFrames)
    {
        $this->videoFrames = $videoFrames;
    }

    /**
     * @return integer
     */
    public function getVideoFps()
    {
        return $this->videoFps;
    }

    /**
     * @param integer
     */
    public function setVideoFps($videoFps)
    {
        $this->videoFps = $videoFps;
    }

    /**
     * @return string
     */
    public function getVideoCodec()
    {
        return $this->videoCodec;
    }

    /**
     * @param string
     */
    public function setVideoCodec($videoCodec)
    {
        $this->videoCodec = $videoCodec;
    }

    /**
     * @return integer
     */
    public function getVideoBitRate()
    {
        return $this->videoBitRate;
    }

    /**
     * @param integer
     */
    public function setVideoBitRate($videoBitRate)
    {
        $this->videoBitRate = $videoBitRate;
    }

    /**
     * @return string
     */
    public function getAudioCodec()
    {
        return $this->audioCodec;
    }

    /**
     * @param string
     */
    public function setAudioCodec($audioCodec)
    {
        $this->audioCodec = $audioCodec;
    }

    /**
     * @return integer
     */
    public function getAudioBitRate()
    {
        return $this->audioBitRate;
    }

    /**
     * @param integer
     */
    public function setAudioBitRate($audioBitRate)
    {
        $this->audioBitRate = $audioBitRate;
    }

    /**
     * @return integer
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * @param integer
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * @param string
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
    }

    /**
     * @return string
     */
    public function getSystemStatus()
    {
        return $this->systemStatus;
    }

    /**
     * @param string
     */
    public function setSystemStatus($systemStatus)
    {
        $this->systemStatus = $systemStatus;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getPreviewUrl()
    {
        return $this->previewUrl;
    }

    /**
     * @param string
     */
    public function setPreviewUrl($previewUrl)
    {
        $this->previewUrl = $previewUrl;
    }

}
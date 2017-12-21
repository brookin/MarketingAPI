<?php


namespace Brookin\MarketingAPI\Video;


use Brookin\MarketingAPI\Request;
use Brookin\MarketingAPI\UploadFileStruct;

class VideoAddRequest extends Request
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var UploadFileStruct
     */
    public $videoFile;

    /**
     * @var string
     */
    public $description;

    public function getGuzzleRequestEnctype()
    {
        return 'multipart';
    }

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
     * @return UploadFileStruct
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }

    /**
     * @param UploadFileStruct $videoFile
     */
    public function setVideoFile($videoFile)
    {
        $this->videoFile = $videoFile;
    }


    /**
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * @param string $signature
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


}
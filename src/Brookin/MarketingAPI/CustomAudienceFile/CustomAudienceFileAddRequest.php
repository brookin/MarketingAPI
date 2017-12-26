<?php


namespace Brookin\MarketingAPI\CustomAudienceFile;


use Brookin\MarketingAPI\Request;
use Brookin\MarketingAPI\UploadFileStruct;
use GuzzleHttp\RequestOptions;

class CustomAudienceFileAddRequest extends Request
{
    /**
     * @var int
     */
    protected $accountId;

    /**
     * @var int
     */
    protected $audienceId;

    /**
     * @var string
     */
    protected $userIdType;

    /**
     * @var UploadFileStruct
     */
    protected $file;

    /**
     * @var string
     */
    protected $operationType;

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

    /**
     * @return string
     */
    public function getUserIdType()
    {
        return $this->userIdType;
    }

    /**
     * @param string $userIdType
     */
    public function setUserIdType($userIdType)
    {
        $this->userIdType = $userIdType;
    }

    /**
     * @return UploadFileStruct
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param UploadFileStruct $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * @return string
     */
    public function getOperationType()
    {
        return $this->operationType;
    }

    /**
     * @param string $operationType
     */
    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;
    }

    public function getGuzzleRequestEnctype()
    {
        return RequestOptions::MULTIPART;
    }
}
<?php


namespace Brookin\MarketingAPI\CustomAudienceFile;


class CustomAudienceFile
{
    /**
     * @var string
     */
    protected $audienceId;

    /**
     * @var string
     */
    protected $customAudienceFileId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $userIdType;

    /**
     * @var string
     */
    protected $operationType;

    /**
     * @var string
     */
    protected $openAppId;

    /**
     * @var string
     */
    protected $processStatus;

    /**
     * @var integer
     */
    protected $processCode;

    /**
     * @var string
     */
    protected $errorMessage;

    /**
     * @var integer
     */
    protected $userCount;

    /**
     * @var integer
     */
    protected $validLineCount;

    /**
     * @var integer
     */
    protected $lineCount;

    /**
     * @var string
     */
    protected $createdTime;


    /**
     * @return string
     */
    public function getAudienceId()
    {
        return $this->audienceId;
    }

    /**
     * @param string
     */
    public function setAudienceId($audienceId)
    {
        $this->audienceId = $audienceId;
    }

    /**
     * @return string
     */
    public function getCustomAudienceFileId()
    {
        return $this->customAudienceFileId;
    }

    /**
     * @param string
     */
    public function setCustomAudienceFileId($customAudienceFileId)
    {
        $this->customAudienceFileId = $customAudienceFileId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getUserIdType()
    {
        return $this->userIdType;
    }

    /**
     * @param string
     */
    public function setUserIdType($userIdType)
    {
        $this->userIdType = $userIdType;
    }

    /**
     * @return string
     */
    public function getOperationType()
    {
        return $this->operationType;
    }

    /**
     * @param string
     */
    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;
    }

    /**
     * @return string
     */
    public function getOpenAppId()
    {
        return $this->openAppId;
    }

    /**
     * @param string
     */
    public function setOpenAppId($openAppId)
    {
        $this->openAppId = $openAppId;
    }

    /**
     * @return string
     */
    public function getProcessStatus()
    {
        return $this->processStatus;
    }

    /**
     * @param string
     */
    public function setProcessStatus($processStatus)
    {
        $this->processStatus = $processStatus;
    }

    /**
     * @return integer
     */
    public function getProcessCode()
    {
        return $this->processCode;
    }

    /**
     * @param integer
     */
    public function setProcessCode($processCode)
    {
        $this->processCode = $processCode;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @param string
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    /**
     * @return integer
     */
    public function getUserCount()
    {
        return $this->userCount;
    }

    /**
     * @param integer
     */
    public function setUserCount($userCount)
    {
        $this->userCount = $userCount;
    }

    /**
     * @return integer
     */
    public function getValidLineCount()
    {
        return $this->validLineCount;
    }

    /**
     * @param integer
     */
    public function setValidLineCount($validLineCount)
    {
        $this->validLineCount = $validLineCount;
    }

    /**
     * @return integer
     */
    public function getLineCount()
    {
        return $this->lineCount;
    }

    /**
     * @param integer
     */
    public function setLineCount($lineCount)
    {
        $this->lineCount = $lineCount;
    }

    /**
     * @return string
     */
    public function getCreatedTime()
    {
        return $this->createdTime;
    }

    /**
     * @param string
     */
    public function setCreatedTime($createdTime)
    {
        $this->createdTime = $createdTime;
    }
}
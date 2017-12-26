<?php


namespace Brookin\MarketingAPI\CustomAudience;


class CustomAudience
{
    /**
     * @var string
     */
    protected $audienceId;

    /**
     * @var string
     */
    protected $accountId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var integer
     */
    protected $errorCode;

    /**
     * @var integer
     */
    protected $userNumber;

    /**
     * @var string
     */
    protected $createdTime;

    /**
     * @var string
     */
    protected $lastModifiedTime;

    /**
     * @var AudienceSpec
     */
    protected $audienceSpec;

    /**
     * @return AudienceSpec
     */
    public function getAudienceSpec()
    {
        return $this->audienceSpec;
    }

    /**
     * @param AudienceSpec $audienceSpec
     */
    public function setAudienceSpec($audienceSpec)
    {
        $this->audienceSpec = $audienceSpec;
    }



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
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param string
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return integer
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param integer
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
    }

    /**
     * @return integer
     */
    public function getUserNumber()
    {
        return $this->userNumber;
    }

    /**
     * @param integer
     */
    public function setUserNumber($userNumber)
    {
        $this->userNumber = $userNumber;
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

    /**
     * @return string
     */
    public function getLastModifiedTime()
    {
        return $this->lastModifiedTime;
    }

    /**
     * @param string
     */
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->lastModifiedTime = $lastModifiedTime;
    }

}
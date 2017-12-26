<?php


namespace Brookin\MarketingAPI\Targeting;


class TargetingModel
{
    /**
     * @var int
     */
    protected $targetingId;

    /**
     * @var string
     */
    protected $targetingName;

    /**
     * @var TargetingInfo
     */
    protected $targeting;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var int
     */
    protected $createdTime;

    /**
     * @var int
     */
    protected $lastModifiedTime;

    /**
     * @return int
     */
    public function getTargetingId()
    {
        return $this->targetingId;
    }

    /**
     * @param int $targetingId
     */
    public function setTargetingId($targetingId)
    {
        $this->targetingId = $targetingId;
    }

    /**
     * @return string
     */
    public function getTargetingName()
    {
        return $this->targetingName;
    }

    /**
     * @param string $targetingName
     */
    public function setTargetingName($targetingName)
    {
        $this->targetingName = $targetingName;
    }

    /**
     * @return TargetingInfo|[]
     */
    public function getTargeting()
    {
        return $this->targeting;
    }

    /**
     * @param TargetingInfo|[] $targeting
     */
    public function setTargeting($targeting)
    {
        $this->targeting = $targeting;
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

    /**
     * @return int
     */
    public function getCreatedTime()
    {
        return $this->createdTime;
    }

    /**
     * @param int $createdTime
     */
    public function setCreatedTime($createdTime)
    {
        $this->createdTime = $createdTime;
    }

    /**
     * @return int
     */
    public function getLastModifiedTime()
    {
        return $this->lastModifiedTime;
    }

    /**
     * @param int $lastModifiedTime
     */
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->lastModifiedTime = $lastModifiedTime;
    }


}
<?php


namespace Brookin\MarketingAPI\UserData;


class UserActionSetModel
{
    /**
     * @var string
     */
    protected $type;

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
    protected $userActionSetId;

    /**
     * @var boolean
     */
    protected $activateStatus;

    /**
     * @var string
     */
    protected $createdTime;


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
    public function getUserActionSetId()
    {
        return $this->userActionSetId;
    }

    /**
     * @param string
     */
    public function setUserActionSetId($userActionSetId)
    {
        $this->userActionSetId = $userActionSetId;
    }

    /**
     * @return boolean
     */
    public function getActivateStatus()
    {
        return $this->activateStatus;
    }

    /**
     * @param boolean
     */
    public function setActivateStatus($activateStatus)
    {
        $this->activateStatus = $activateStatus;
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
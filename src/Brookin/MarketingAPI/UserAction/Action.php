<?php


namespace Brookin\MarketingAPI\UserAction;


class Action
{
    /**
     * @var int
     */
    protected $actionTime;

    /**
     * @var UserId
     */
    protected $userId;

    /**
     * @var string
     */
    protected $actionType;

    /**
     * @var string
     */
    protected $actionParam;

    /**
     * @var int
     */
    protected $userActionSetId;

    /**
     * @var string
     */
    protected $customAction;

    /**
     * @var Trace
     */
    protected $trace;

    /**
     * @return int
     */
    public function getActionTime()
    {
        return $this->actionTime;
    }

    /**
     * @param int $actionTime
     */
    public function setActionTime($actionTime)
    {
        $this->actionTime = $actionTime;
    }

    /**
     * @return UserId
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param UserId $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * @param string $actionType
     */
    public function setActionType($actionType)
    {
        $this->actionType = $actionType;
    }

    /**
     * @return string
     */
    public function getActionParam()
    {
        return $this->actionParam;
    }

    /**
     * @param string $actionParam
     */
    public function setActionParam($actionParam)
    {
        $this->actionParam = $actionParam;
    }

    /**
     * @return int
     */
    public function getUserActionSetId()
    {
        return $this->userActionSetId;
    }

    /**
     * @param int $userActionSetId
     */
    public function setUserActionSetId($userActionSetId)
    {
        $this->userActionSetId = $userActionSetId;
    }

    /**
     * @return string
     */
    public function getCustomAction()
    {
        return $this->customAction;
    }

    /**
     * @param string $customAction
     */
    public function setCustomAction($customAction)
    {
        $this->customAction = $customAction;
    }

    /**
     * @return Trace
     */
    public function getTrace()
    {
        return $this->trace;
    }

    /**
     * @param Trace $trace
     */
    public function setTrace($trace)
    {
        $this->trace = $trace;
    }


}
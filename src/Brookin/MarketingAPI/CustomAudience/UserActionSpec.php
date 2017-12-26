<?php


namespace Brookin\MarketingAPI\CustomAudience;


class UserActionSpec
{
    /**
     * @var int
     */
    protected $userActionSetId;

    /**
     * @var string
     */
    protected $matchRuleType;

    /**
     * @var int
     */
    protected $timeWindow;

    /**
     * @var UrlMatchRule
     */
    protected $urlMatchRule;

    /**
     * @var ActionMatchRule
     */
    protected $actionMatchRule;

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
    public function getMatchRuleType()
    {
        return $this->matchRuleType;
    }

    /**
     * @param string $matchRuleType
     */
    public function setMatchRuleType($matchRuleType)
    {
        $this->matchRuleType = $matchRuleType;
    }

    /**
     * @return int
     */
    public function getTimeWindow()
    {
        return $this->timeWindow;
    }

    /**
     * @param int $timeWindow
     */
    public function setTimeWindow($timeWindow)
    {
        $this->timeWindow = $timeWindow;
    }

    /**
     * @return UrlMatchRule
     */
    public function getUrlMatchRule()
    {
        return $this->urlMatchRule;
    }

    /**
     * @param UrlMatchRule $urlMatchRule
     */
    public function setUrlMatchRule($urlMatchRule)
    {
        $this->urlMatchRule = $urlMatchRule;
    }

    /**
     * @return ActionMatchRule
     */
    public function getActionMatchRule()
    {
        return $this->actionMatchRule;
    }

    /**
     * @param ActionMatchRule $actionMatchRule
     */
    public function setActionMatchRule($actionMatchRule)
    {
        $this->actionMatchRule = $actionMatchRule;
    }


}
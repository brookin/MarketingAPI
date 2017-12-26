<?php


namespace Brookin\MarketingAPI\CustomAudience;


class ActionMatchRule
{
    /**
     * @var string
     */
    protected $actionType;

    /**
     * @var string
     */
    protected $customAction;

    /**
     * @var ParamMatcherGroup
     */
    protected $paramMatcherGroup;

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
     * @return ParamMatcherGroup
     */
    public function getParamMatcherGroup()
    {
        return $this->paramMatcherGroup;
    }

    /**
     * @param ParamMatcherGroup $paramMatcherGroup
     */
    public function setParamMatcherGroup($paramMatcherGroup)
    {
        $this->paramMatcherGroup = $paramMatcherGroup;
    }


}
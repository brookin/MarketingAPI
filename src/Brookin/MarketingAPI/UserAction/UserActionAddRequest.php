<?php


namespace Brookin\MarketingAPI\UserAction;


use Brookin\MarketingAPI\Request;

class UserActionAddRequest extends Request
{
    /**
     * @var int
     */
    protected $accountId;


    /**
     * @var Action[]
     */
    protected $actions;

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
     * @return Action[]
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @param Action[] $actions
     */
    public function setActions($actions)
    {
        $this->actions = $actions;
    }


}
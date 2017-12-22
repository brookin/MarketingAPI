<?php


namespace Brookin\MarketingAPI\UserData;


use Brookin\MarketingAPI\Request;

class UserActionSetGetRequest extends Request
{
    /**
     * @var int
     */
    protected $accountId;

    /**
     * @var int
     */
    protected $userActionSetId;

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


}
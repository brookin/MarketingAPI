<?php


namespace Brookin\MarketingAPI\UserData;


use Brookin\MarketingAPI\Response;

class UserActionSetAddResponse extends Response
{
    /**
     * @var int
     */
    protected $userActionSetId;

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
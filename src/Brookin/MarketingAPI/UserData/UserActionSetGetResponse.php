<?php


namespace Brookin\MarketingAPI\UserData;


use Brookin\MarketingAPI\Response;

class UserActionSetGetResponse extends Response
{
    /**
     * @var UserActionSetModel[]
     */
    protected $list;

    /**
     * @return UserActionSetModel[]
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param UserActionSetModel[] $list
     */
    public function setList($list)
    {
        $this->list = $list;
    }


}
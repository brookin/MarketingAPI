<?php


namespace Brookin\MarketingAPI\UserData;


use Brookin\MarketingAPI\Response;

class UserActionSetReportGetResponse extends Response
{
    /**
     * @var UserActionSetReport[]
     */
    protected $list;

    /**
     * @return UserActionSetReport[]
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param UserActionSetReport[] $list
     */
    public function setList($list)
    {
        $this->list = $list;
    }


}
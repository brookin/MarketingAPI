<?php


namespace Brookin\MarketingAPI\Fund;


use Brookin\MarketingAPI\Response;

class FundGetResponse extends Response
{
    /**
     * @var FundModel[]
     */
    protected $list;

    /**
     * @return FundModel[]
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param FundModel[] $list
     */
    public function setList($list)
    {
        $this->list = $list;
    }


}
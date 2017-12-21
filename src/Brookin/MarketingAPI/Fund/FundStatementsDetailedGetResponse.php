<?php


namespace Brookin\MarketingAPI\Fund;


use Brookin\MarketingAPI\Response;

class FundStatementsDetailedGetResponse extends Response
{
    /**
     * @var FundStatementsDetailedModel[]
     */
    protected $list;

    /**
     * @return FundStatementsDetailedModel[]
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param FundStatementsDetailedModel[] $list
     */
    public function setList($list)
    {
        $this->list = $list;
    }


}
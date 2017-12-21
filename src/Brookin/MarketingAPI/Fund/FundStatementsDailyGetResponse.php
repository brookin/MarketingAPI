<?php


namespace Brookin\MarketingAPI\Fund;


use Brookin\MarketingAPI\Response;

class FundStatementsDailyGetResponse extends Response
{
    /**
     * @var FundStatementsDailyModel[]
     */
    protected $list;

    /**
     * @return FundStatementsDailyModel[]
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param FundStatementsDailyModel[] $list
     */
    public function setList($list)
    {
        $this->list = $list;
    }


}
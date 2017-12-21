<?php


namespace Brookin\MarketingAPI\RealtimeCost;


use Brookin\MarketingAPI\Response;

class RealtimeCostGetResponse extends Response
{
    /**
     * @var RealtimeCostModel[]
     */
    public $list;

    /**
     * @var \Brookin\MarketingAPI\PageInfo
     */
    public $pageInfo;

    /**
     * @return RealtimeCostModel[]
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param RealtimeCostModel[] $list
     */
    public function setList($list)
    {
        $this->list = $list;
    }

    /**
     * @return \Brookin\MarketingAPI\PageInfo
     */
    public function getPageInfo()
    {
        return $this->pageInfo;
    }

    /**
     * @param \Brookin\MarketingAPI\PageInfo $pageInfo
     */
    public function setPageInfo($pageInfo)
    {
        $this->pageInfo = $pageInfo;
    }


}
<?php


namespace Brookin\MarketingAPI\Report;


use Brookin\MarketingAPI\Response;

class DailyReportGetResponse extends Response
{

    /**
     * @var DailyReportModel[]
     */
    protected $list;

    /**
     * @var \Brookin\MarketingAPI\PageInfo
     */
    protected $pageInfo;

    /**
     * @return DailyReportModel[]
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param DailyReportModel[] $list
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
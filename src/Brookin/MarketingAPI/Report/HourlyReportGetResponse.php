<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:18 PM
 */

namespace Brookin\MarketingAPI\Report;


use Brookin\MarketingAPI\Response;

class HourlyReportGetResponse extends Response
{
    /**
     * @var HourlyReportModel[]
     */
    protected $list;

    /**
     * @var \Brookin\MarketingAPI\PageInfo
     */
    protected $pageInfo;

    /**
     * @return HourlyReportModel[]
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param HourlyReportModel[] $list
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
<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:18 PM
 */

namespace Brookin\MarketingAPI\Targeting;


use Brookin\MarketingAPI\Response;

class TargetingGetResponse extends Response
{

    /**
     * @var TargetingModel[]
     */
    protected $list;

    /**
     * @var \Brookin\MarketingAPI\PageInfo
     */
    protected $pageInfo;

    /**
     * @return TargetingModel[]
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param TargetingModel[] $list
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
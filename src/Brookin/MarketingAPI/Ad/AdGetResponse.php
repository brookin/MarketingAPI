<?php
/**
 * Created by PhpStorm.
 * Date: 12/12/17
 * Time: 2:59 PM
 */

namespace Brookin\MarketingAPI\Ad;


use Brookin\MarketingAPI\Response;

class AdGetResponse extends Response
{
    /**
     * @var AdModel[]
     */
    protected $list;

    /**
     * @var \Brookin\MarketingAPI\PageInfo
     */
    protected $pageInfo;

    /**
     * @return AdModel[]
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param AdModel[] $list
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
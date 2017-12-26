<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:22 PM
 */

namespace Brookin\MarketingAPI\Adgroup;


use Brookin\MarketingAPI\Response;

class AdgroupGetResponse extends Response
{
    /**
     * @var Adgroup[]
     */
    protected $list;

    /**
     * @var \Brookin\MarketingAPI\PageInfo
     */
    protected $pageInfo;

    /**
     * @return Adgroup[]
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param Adgroup[] $list
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
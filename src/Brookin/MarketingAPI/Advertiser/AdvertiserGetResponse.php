<?php
/**
 * Created by PhpStorm.
 * Date: 11/27/17
 * Time: 8:53 PM
 */

namespace Brookin\MarketingAPI\Advertiser;


use Brookin\MarketingAPI\Response;

class AdvertiserGetResponse extends Response
{
    /**
     * @var Advertiser[]
     */
    protected $list;

    /**
     * @var \Brookin\MarketingAPI\PageInfo
     */
    protected $pageInfo;

    /**
     * @return Advertiser[]
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param Advertiser[] $list
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
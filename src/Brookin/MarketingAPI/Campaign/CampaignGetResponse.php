<?php
/**
 * Created by PhpStorm.
 * Date: 12/7/17
 * Time: 7:40 PM
 */

namespace Brookin\MarketingAPI\Campaign;


use Brookin\MarketingAPI\Response;

class CampaignGetResponse extends Response
{
    /**
     * @var CampaignModel[]
     */
    protected $list;

    /**
     * @var \Brookin\MarketingAPI\PageInfo
     */
    protected $pageInfo;

    /**
     * @return CampaignModel[]
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param CampaignModel[] $list
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
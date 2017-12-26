<?php


namespace Brookin\MarketingAPI\CustomAudience;


use Brookin\MarketingAPI\Response;

class CustomAudienceGetResponse extends Response
{
    /**
     * @var CustomAudience[]
     */
    protected $list;

    /**
     * @var \Brookin\MarketingAPI\PageInfo
     */
    protected $pageInfo;

    /**
     * @return CustomAudience[]
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param CustomAudience[] $list
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
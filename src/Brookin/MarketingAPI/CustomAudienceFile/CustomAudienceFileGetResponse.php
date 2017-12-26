<?php


namespace Brookin\MarketingAPI\CustomAudienceFile;


use Brookin\MarketingAPI\Response;

class CustomAudienceFileGetResponse extends Response
{
    /**
     * @var CustomAudienceFile[]
     */
    protected $list;

    /**
     * @var \Brookin\MarketingAPI\PageInfo
     */
    protected $pageInfo;

    /**
     * @return CustomAudienceFile[]
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param CustomAudienceFile[] $list
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
<?php


namespace Brookin\MarketingAPI\Image;


use Brookin\MarketingAPI\Response;

class ImageGetResponse extends Response
{
    /**
     * @var ImageModel[]
     */
    protected $list;

    /**
     * @var \Brookin\MarketingAPI\PageInfo
     */
    protected $pageInfo;

    /**
     * @return ImageModel[]
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param ImageModel[] $list
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
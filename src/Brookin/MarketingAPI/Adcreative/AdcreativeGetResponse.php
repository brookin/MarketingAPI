<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:23 PM
 */

namespace Brookin\MarketingAPI\Adcreative;


use Brookin\MarketingAPI\Response;

class AdcreativeGetResponse extends Response
{
    /**
     * @var Adcreative[]
     */
    protected $list;

    /**
     * @var \Brookin\MarketingAPI\PageInfo
     */
    protected $pageInfo;

    /**
     * @return Adcreative[]
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param Adcreative[] $list
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
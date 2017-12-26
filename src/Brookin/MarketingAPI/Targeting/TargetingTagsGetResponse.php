<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:18 PM
 */

namespace Brookin\MarketingAPI\Targeting;


use Brookin\MarketingAPI\Response;

class TargetingTagsGetResponse extends Response
{
    /**
     * @var TargetingTagsModel[]
     */
    protected $list;

    /**
     * @return TargetingTagsModel[]
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param TargetingTagsModel[] $list
     */
    public function setList($list)
    {
        $this->list = $list;
    }


}
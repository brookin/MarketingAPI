<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:18 PM
 */

namespace Brookin\MarketingAPI\Targeting;


use Brookin\MarketingAPI\Response;

class TargetingTagGetResponse extends Response
{
    /**
     * @var TargetingTagModel[]
     */
    protected $list;

    /**
     * @return TargetingTagModel[]
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param TargetingTagModel[] $list
     */
    public function setList($list)
    {
        $this->list = $list;
    }


}
<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:17 PM
 */

namespace Brookin\MarketingAPI\Targeting;


use Brookin\MarketingAPI\Request;

class TargetingTagsGetRequest extends Request
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var int
     */
    protected $regionId;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getRegionId()
    {
        return $this->regionId;
    }

    /**
     * @param int $regionId
     */
    public function setRegionId($regionId)
    {
        $this->regionId = $regionId;
    }


}
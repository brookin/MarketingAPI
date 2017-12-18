<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 10:26 AM
 */

namespace Brookin\MarketingAPI\Targeting;


use Brookin\MarketingAPI\Request;

class TargetingAddRequest extends Request
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $targetingName;

    /**
     * @var TargetingInfo
     */
    public $targeting;

    /**
     * @var string
     */
    public $description;

}
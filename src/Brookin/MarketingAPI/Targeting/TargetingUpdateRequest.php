<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:13 PM
 */

namespace Brookin\MarketingAPI\Targeting;


use Brookin\MarketingAPI\Request;

class TargetingUpdateRequest extends Request
{

    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $targetingId;

    /**
     * @var string
     */
    public $description;
}
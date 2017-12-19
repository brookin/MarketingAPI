<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:18 PM
 */

namespace Brookin\MarketingAPI\Targeting;


use Brookin\MarketingAPI\Response;

class TargetingGetResponse extends Response
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
    public $targetingName;



}
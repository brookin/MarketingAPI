<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:37 PM
 */

namespace Brookin\MarketingAPI\Ad;


use Brookin\MarketingAPI\Request;

class AdAddRequest extends Request
{

    public $accountId;

    public $adgroupId;

    public $adcreativeId;

    public $adName;

    public $configuredStatus;

}
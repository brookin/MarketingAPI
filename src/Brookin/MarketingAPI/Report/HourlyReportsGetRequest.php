<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:17 PM
 */

namespace Brookin\MarketingAPI\Report;


use Brookin\MarketingAPI\Request;

class HourlyReportsRequest extends Request
{

    public $accountId;

    public $targetingId;
}
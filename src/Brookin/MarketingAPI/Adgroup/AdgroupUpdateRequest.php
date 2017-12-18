<?php
/**
 * Created by PhpStorm.
 * Date: 12/12/17
 * Time: 12:20 PM
 */

namespace Brookin\MarketingAPI\Adgroup;


use Brookin\MarketingAPI\Request;

class AdgroupUpdateRequest extends Request
{

    public $accountId;

    public $adgroupId;

    public $adgroupName;

    public $bidAmount;

    public $beginDate;

    public $endDate;

    public $timeSeries;

    public $configuredStatus;

}
<?php
/**
 * Created by PhpStorm.
 * Date: 12/7/17
 * Time: 7:34 PM
 */

namespace Brookin\MarketingAPI\Campaign;


use Brookin\MarketingAPI\Request;

class CampaignUpdateRequest extends Request
{

    public $accountId;

    public $campaignId;

    public $campaignName;

    public $dailyBudget;

    public $configuredStatus;

    public $speedMode;
}
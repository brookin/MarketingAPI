<?php
/**
 * Created by PhpStorm.
 * Date: 12/7/17
 * Time: 4:42 PM
 */

namespace Brookin\MarketingAPI\Campaign;


use Brookin\MarketingAPI\Request;

class CampaignAddRequest extends Request
{

    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $campaignName;

    /**
     * @var string
     */
    public $campaignType;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var int
     */
    public $dailyBudget;

    /**
     * @var string
     */
    public $configuredStatus;

    /**
     * @var string
     */
    public $speedMode;
}
<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 9:08 AM
 */

namespace Brookin\MarketingAPI\Adgroup;


use Brookin\MarketingAPI\Request;

class AdgroupAddRequest extends Request
{

    /**
     * @var int
     * @required
     */
    public $accountId;

    /**
     * @var int
     * @required
     */
    public $campaignId;

    /**
     * @var string
     * @required
     */
    public $adgroupName;

    /**
     * @var string[]
     * @required
     */
    public $siteSet;

    /**
     * @var string
     * @required
     */
    public $productType;

    /**
     * @var string
     * @required
     */
    public $beginDate;

    /**
     * @var string
     * @required
     */
    public $endDate;

    /**
     * @var string
     * @required
     */
    public $billingEvent;

    /**
     * @var int
     * @required
     */
    public $bidAmount;

    /**
     * @var string
     * @required
     */
    public $optimizationGoal;


    /**
     * @var string
     * @optional
     */
    public $productRefsId;

    /**
     * @var string
     * @optional
     */
    public $subProductRefsId;

    /**
     * @var int
     * @optional
     */
    public $targetingId;

    /**
     * @var string
     * @optional
     */
    public $timeSeries;

    /**
     * @var string
     * @optional
     */
    public $configuredStatus;
}
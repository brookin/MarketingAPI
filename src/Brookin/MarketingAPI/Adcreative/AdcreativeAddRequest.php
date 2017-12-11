<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 9:29 AM
 */

namespace Brookin\MarketingAPI\Adcreative;


use Brookin\MarketingAPI\Request;

class AdcreativeAddRequest extends Request
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $campaignId;

    /**
     * @var string
     */
    public $adcreativeName;

    /**
     * @var int
     */
    public $adcreativeTemplateId;

    /**
     * @var
     */
    public $adcreativeElements;

    /**
     * @var string
     */
    public $destinationUrl;

    /**
     * @var string[]
     */
    public $siteSet;

    /**
     * @var string
     */
    public $productType;

    /***********************************/

    /**
     * @var string
     */
//    public $productRefsId;
}
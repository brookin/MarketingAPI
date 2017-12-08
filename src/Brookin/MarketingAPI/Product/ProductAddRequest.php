<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:56 PM
 */

namespace Brookin\MarketingAPI\Product;


use Brookin\MarketingAPI\Request;

class ProductAddRequest extends Request
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $productRefsId;
}
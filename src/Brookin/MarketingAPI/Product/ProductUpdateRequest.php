<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:58 PM
 */

namespace Brookin\MarketingAPI\Product;


use Brookin\MarketingAPI\Request;

class ProductUpdateRequest extends Request
{

    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $productRefsId;

    /**
     * @var string
     */
    public $productName;
}
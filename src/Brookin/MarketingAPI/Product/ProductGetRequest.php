<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:58 PM
 */

namespace Brookin\MarketingAPI\Product;


use Brookin\MarketingAPI\Request;

class ProductGetRequest extends Request
{
    public $accountId;

    public $productType;

    public $productRefsId;
}
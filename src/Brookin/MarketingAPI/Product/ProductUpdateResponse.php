<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:58 PM
 */

namespace Brookin\MarketingAPI\Product;


use Brookin\MarketingAPI\Response;

class ProductUpdateResponse extends Response
{

    /**
     * @var string
     */
    public $productRefsId;

    /**
     * @return string
     */
    public function getProductRefsId()
    {
        return $this->productRefsId;
    }

    /**
     * @param string $productRefsId
     */
    public function setProductRefsId($productRefsId)
    {
        $this->productRefsId = $productRefsId;
    }


}
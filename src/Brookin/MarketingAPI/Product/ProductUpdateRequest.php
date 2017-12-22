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

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param int $accountId
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    /**
     * @return string
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @param string $productType
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
    }

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

    /**
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
    }


}
<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:59 PM
 */

namespace Brookin\MarketingAPI\Product;


use Brookin\MarketingAPI\Response;

class ProductGetResponse extends Response
{
    /**
     * @var string
     */
    protected $productRefsId;

    /**
     * @var string
     */
    protected $productName;

    /**
     * @var string
     */
    protected $productType;

    /**
     * @var ProductInfo
     */
    protected $productInfo;

    /**
     * @var SubordinateProductList
     */
    protected $subordinateProductList;

    /**
     * @var integer
     */
    protected $createdTime;

    /**
     * @var integer
     */
    protected $lastModifiedTime;

    /**
     * @return string
     */
    public function getProductRefsId()
    {
        return $this->productRefsId;
    }

    /**
     * @param string
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
     * @param string
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    /**
     * @return string
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @param string
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
    }

    /**
     * @return ProductInfo
     */
    public function getProductInfo()
    {
        return $this->productInfo;
    }

    /**
     * @param ProductInfo
     */
    public function setProductInfo($productInfo)
    {
        $this->productInfo = $productInfo;
    }

    /**
     * @return SubordinateProductList
     */
    public function getSubordinateProductList()
    {
        return $this->subordinateProductList;
    }

    /**
     * @param SubordinateProductList $subordinateProductList
     */
    public function setSubordinateProductList($subordinateProductList)
    {
        $this->subordinateProductList = $subordinateProductList;
    }

    /**
     * @return integer
     */
    public function getCreatedTime()
    {
        return $this->createdTime;
    }

    /**
     * @param integer
     */
    public function setCreatedTime($createdTime)
    {
        $this->createdTime = $createdTime;
    }

    /**
     * @return integer
     */
    public function getLastModifiedTime()
    {
        return $this->lastModifiedTime;
    }

    /**
     * @param integer
     */
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->lastModifiedTime = $lastModifiedTime;
    }
}
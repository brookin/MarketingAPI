<?php


namespace Brookin\MarketingAPI\Product;


class ProductInfo
{
    /**
     * @var ProductTypeAppleAppStore
     */
    protected $productTypeAppleAppStore;


    /**
     * @return ProductTypeAppleAppStore
     */
    public function getProductTypeAppleAppStore()
    {
        return $this->productTypeAppleAppStore;
    }

    /**
     * @param ProductTypeAppleAppStore
     */
    public function setProductTypeAppleAppStore($productTypeAppleAppStore)
    {
        $this->productTypeAppleAppStore = $productTypeAppleAppStore;
    }
}
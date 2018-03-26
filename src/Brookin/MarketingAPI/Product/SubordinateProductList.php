<?php


namespace Brookin\MarketingAPI\Product;


class SubordinateProductList
{
    /**
     * @var string
     */
    protected $subProductRefsId;

    /**
     * @var string
     */
    protected $packageName;

    /**
     * @return string
     */
    public function getSubProductRefsId()
    {
        return $this->subProductRefsId;
    }

    /**
     * @param string $subProductRefsId
     */
    public function setSubProductRefsId($subProductRefsId)
    {
        $this->subProductRefsId = $subProductRefsId;
    }

    /**
     * @return string
     */
    public function getPackageName()
    {
        return $this->packageName;
    }

    /**
     * @param string $packageName
     */
    public function setPackageName($packageName)
    {
        $this->packageName = $packageName;
    }


}
<?php


namespace Brookin\MarketingAPI\CustomAudience;


class AdRuleSpec
{
    /**
     * @var string
     */
    protected $ruleType;

    /**
     * @var int
     */
    protected $timeWindow;

    /**
     * @var string[]
     */
    protected $conversionType;

    /**
     * @var int[]
     */
    protected $campaignIdList;

    /**
     * @var ProductList[]
     */
    protected $productList;

    /**
     * @return string
     */
    public function getRuleType()
    {
        return $this->ruleType;
    }

    /**
     * @param string $ruleType
     */
    public function setRuleType($ruleType)
    {
        $this->ruleType = $ruleType;
    }

    /**
     * @return int
     */
    public function getTimeWindow()
    {
        return $this->timeWindow;
    }

    /**
     * @param int $timeWindow
     */
    public function setTimeWindow($timeWindow)
    {
        $this->timeWindow = $timeWindow;
    }

    /**
     * @return \string[]
     */
    public function getConversionType()
    {
        return $this->conversionType;
    }

    /**
     * @param \string[] $conversionType
     */
    public function setConversionType($conversionType)
    {
        $this->conversionType = $conversionType;
    }

    /**
     * @return \int[]
     */
    public function getCampaignIdList()
    {
        return $this->campaignIdList;
    }

    /**
     * @param \int[] $campaignIdList
     */
    public function setCampaignIdList($campaignIdList)
    {
        $this->campaignIdList = $campaignIdList;
    }

    /**
     * @return ProductList[]
     */
    public function getProductList()
    {
        return $this->productList;
    }

    /**
     * @param ProductList[] $productList
     */
    public function setProductList($productList)
    {
        $this->productList = $productList;
    }


}
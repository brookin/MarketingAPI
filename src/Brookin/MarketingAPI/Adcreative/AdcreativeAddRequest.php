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
    public $productRefsId;

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
     * @return int
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * @param int $campaignId
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
    }

    /**
     * @return string
     */
    public function getAdcreativeName()
    {
        return $this->adcreativeName;
    }

    /**
     * @param string $adcreativeName
     */
    public function setAdcreativeName($adcreativeName)
    {
        $this->adcreativeName = $adcreativeName;
    }

    /**
     * @return int
     */
    public function getAdcreativeTemplateId()
    {
        return $this->adcreativeTemplateId;
    }

    /**
     * @param int $adcreativeTemplateId
     */
    public function setAdcreativeTemplateId($adcreativeTemplateId)
    {
        $this->adcreativeTemplateId = $adcreativeTemplateId;
    }

    /**
     * @return mixed
     */
    public function getAdcreativeElements()
    {
        return $this->adcreativeElements;
    }

    /**
     * @param mixed $adcreativeElements
     */
    public function setAdcreativeElements($adcreativeElements)
    {
        $this->adcreativeElements = $adcreativeElements;
    }

    /**
     * @return string
     */
    public function getDestinationUrl()
    {
        return $this->destinationUrl;
    }

    /**
     * @param string $destinationUrl
     */
    public function setDestinationUrl($destinationUrl)
    {
        $this->destinationUrl = $destinationUrl;
    }

    /**
     * @return \string[]
     */
    public function getSiteSet()
    {
        return $this->siteSet;
    }

    /**
     * @param \string[] $siteSet
     */
    public function setSiteSet($siteSet)
    {
        $this->siteSet = $siteSet;
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


}
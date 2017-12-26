<?php

/**
 * Created by PhpStorm.
 * User: peter
 * Date: 2017/12/15
 * Time: 17:46
 */

namespace Brookin\MarketingAPI\Adcreative;


class Adcreative
{
        
    /**
     * @var string
     */
    protected $adcreativeId;
            
    /**
     * @var string
     */
    protected $adcreativeName;
            
    /**
     * @var string
     */
    protected $campaignId;
            
    /**
     * @var string
     */
    protected $adcreativeTemplateId;
            
    /**
     * @var AdcreativeElements
     */
    protected $adcreativeElements;
            
    /**
     * @var string
     */
    protected $destinationUrl;
            
    /**
     * @var string[]
     */
    protected $siteSet;
            
    /**
     * @var string
     */
    protected $productType;
            
    /**
     * @var string
     */
    protected $productRefsId;
            
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
    public function getAdcreativeId()
    {
        return $this->adcreativeId;
    }
    
    /**
     * @param string
     */
    public function setAdcreativeId($adcreativeId)
    {
        $this->adcreativeId = $adcreativeId;
    }

    /**
     * @return string
     */
    public function getAdcreativeName()
    {
        return $this->adcreativeName;
    }
    
    /**
     * @param string
     */
    public function setAdcreativeName($adcreativeName)
    {
        $this->adcreativeName = $adcreativeName;
    }

    /**
     * @return string
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }
    
    /**
     * @param string
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
    }

    /**
     * @return string
     */
    public function getAdcreativeTemplateId()
    {
        return $this->adcreativeTemplateId;
    }
    
    /**
     * @param string
     */
    public function setAdcreativeTemplateId($adcreativeTemplateId)
    {
        $this->adcreativeTemplateId = $adcreativeTemplateId;
    }

    /**
     * @return AdcreativeElements
     */
    public function getAdcreativeElements()
    {
        return $this->adcreativeElements;
    }
    
    /**
     * @param AdcreativeElements
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
     * @param string
     */
    public function setDestinationUrl($destinationUrl)
    {
        $this->destinationUrl = $destinationUrl;
    }

    /**
     * @return string[]
     */
    public function getSiteSet()
    {
        return $this->siteSet;
    }
    
    /**
     * @param string[]
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
     * @param string
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
     * @param string
     */
    public function setProductRefsId($productRefsId)
    {
        $this->productRefsId = $productRefsId;
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
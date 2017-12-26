<?php

/**
 * Created by PhpStorm.
 * User: peter
 * Date: 2017/12/15
 * Time: 17:46
 */

namespace Brookin\MarketingAPI\Product;


class ProductTypeAppleAppStore
{
        
    /**
     * @var string
     */
    protected $appPropertyPackname;
            
    /**
     * @var string
     */
    protected $appPropertyVersion;
            
    /**
     * @var string
     */
    protected $appPropertyIconUrl;
            
    /**
     * @var string
     */
    protected $appPropertyIconUrl_512;
            
    /**
     * @var string
     */
    protected $appPropertyAverageUserRating;
            
    /**
     * @var string
     */
    protected $appPropertyPackageSizeBytes;
            
    /**
     * @var string[]
     */
    protected $appPropertyGenres;
            
    /**
     * @var string
     */
    protected $appPropertyPkgUrl;
    

    /**
     * @return string
     */
    public function getAppPropertyPackname()
    {
        return $this->appPropertyPackname;
    }
    
    /**
     * @param string
     */
    public function setAppPropertyPackname($appPropertyPackname)
    {
        $this->appPropertyPackname = $appPropertyPackname;
    }

    /**
     * @return string
     */
    public function getAppPropertyVersion()
    {
        return $this->appPropertyVersion;
    }
    
    /**
     * @param string
     */
    public function setAppPropertyVersion($appPropertyVersion)
    {
        $this->appPropertyVersion = $appPropertyVersion;
    }

    /**
     * @return string
     */
    public function getAppPropertyIconUrl()
    {
        return $this->appPropertyIconUrl;
    }
    
    /**
     * @param string
     */
    public function setAppPropertyIconUrl($appPropertyIconUrl)
    {
        $this->appPropertyIconUrl = $appPropertyIconUrl;
    }

    /**
     * @return string
     */
    public function getAppPropertyIconUrl_512()
    {
        return $this->appPropertyIconUrl_512;
    }
    
    /**
     * @param string
     */
    public function setAppPropertyIconUrl_512($appPropertyIconUrl_512)
    {
        $this->appPropertyIconUrl_512 = $appPropertyIconUrl_512;
    }

    /**
     * @return string
     */
    public function getAppPropertyAverageUserRating()
    {
        return $this->appPropertyAverageUserRating;
    }
    
    /**
     * @param string
     */
    public function setAppPropertyAverageUserRating($appPropertyAverageUserRating)
    {
        $this->appPropertyAverageUserRating = $appPropertyAverageUserRating;
    }

    /**
     * @return string
     */
    public function getAppPropertyPackageSizeBytes()
    {
        return $this->appPropertyPackageSizeBytes;
    }
    
    /**
     * @param string
     */
    public function setAppPropertyPackageSizeBytes($appPropertyPackageSizeBytes)
    {
        $this->appPropertyPackageSizeBytes = $appPropertyPackageSizeBytes;
    }

    /**
     * @return string[]
     */
    public function getAppPropertyGenres()
    {
        return $this->appPropertyGenres;
    }
    
    /**
     * @param string[]
     */
    public function setAppPropertyGenres($appPropertyGenres)
    {
        $this->appPropertyGenres = $appPropertyGenres;
    }

    /**
     * @return string
     */
    public function getAppPropertyPkgUrl()
    {
        return $this->appPropertyPkgUrl;
    }
    
    /**
     * @param string
     */
    public function setAppPropertyPkgUrl($appPropertyPkgUrl)
    {
        $this->appPropertyPkgUrl = $appPropertyPkgUrl;
    }

}
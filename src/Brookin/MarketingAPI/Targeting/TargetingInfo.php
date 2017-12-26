<?php
/**
 * Created by PhpStorm.
 * Date: 12/18/17
 * Time: 4:04 PM
 */

namespace Brookin\MarketingAPI\Targeting;


class TargetingInfo
{
    /**
     * @var string[]
     */
    public $age = [];

    /**
     * @var string[]
     */
    public $gender = [];

    /**
     * @var string[]
     */
<<<<<<< HEAD
    public $education;

    /**
     * @var string[]
     */
    protected $relationshipStatus;

    /**
     * @var string[]
     */
    protected $livingStatus;

    /**
     * @var int[]
     */
    protected $businessInterest;

    /**
     * @var Keyword
     */
    protected $keyword;

    /**
     * @var GeoLocation
     */
    protected $geoLocation;

    /**
     * @var string[]
     */
    protected $userOs;

    /**
     * @var string[]
     */
    protected $newDevice;

    /**
     * @var string[]
     */
    protected $devicePrice;

    /**
     * @var string[]
     */
    protected $networkType;

    /**
     * @var string[]
     */
    protected $networkOperator;

    /**
     * @var string[]
     */
    protected $dressingIndex;

    /**
     * @var string[]
     */
    protected $uvIndex;

    /**
     * @var string[]
     */
    protected $makeupIndex;

    /**
     * @var string[]
     */
    protected $climate;

    /**
     * @var string[]
     */
    protected $temperature;

    /**
     * @var string[]
     */
    protected $appInstallStatus;

    /**
     * @var AppBehavior
     */
    protected $appBehavior;

    /**
     * @var string[]
     */
    protected $shoppingCapability;

    /**
     * @var string[]
     */
    protected $playerConsupt;

    /**
     * @var string[]
     */
    protected $payingUserType;

    /**
     * @var string[]
     */
    protected $residentialCommunityPrice;

    /**
     * @var int[]
     */
    protected $customAudience;

    /**
     * @var int[]
     */
    protected $excludedCustomAudience;

    /**
     * @return \string[]
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param \string[] $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return \string[]
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param \string[] $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return \string[]
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * @param \string[] $education
     */
    public function setEducation($education)
    {
        $this->education = $education;
    }

    /**
     * @return \string[]
     */
    public function getRelationshipStatus()
    {
        return $this->relationshipStatus;
    }

    /**
     * @param \string[] $relationshipStatus
     */
    public function setRelationshipStatus($relationshipStatus)
    {
        $this->relationshipStatus = $relationshipStatus;
    }

    /**
     * @return \string[]
     */
    public function getLivingStatus()
    {
        return $this->livingStatus;
    }

    /**
     * @param \string[] $livingStatus
     */
    public function setLivingStatus($livingStatus)
    {
        $this->livingStatus = $livingStatus;
    }

    /**
     * @return \int[]
     */
    public function getBusinessInterest()
    {
        return $this->businessInterest;
    }

    /**
     * @param \int[] $businessInterest
     */
    public function setBusinessInterest($businessInterest)
    {
        $this->businessInterest = $businessInterest;
    }

    /**
     * @return Keyword
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param Keyword $keyword
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
    }

    /**
     * @return GeoLocation
     */
    public function getGeoLocation()
    {
        return $this->geoLocation;
    }

    /**
     * @param GeoLocation $geoLocation
     */
    public function setGeoLocation($geoLocation)
    {
        $this->geoLocation = $geoLocation;
    }

    /**
     * @return \string[]
     */
    public function getUserOs()
    {
        return $this->userOs;
    }

    /**
     * @param \string[] $userOs
     */
    public function setUserOs($userOs)
    {
        $this->userOs = $userOs;
    }

    /**
     * @return \string[]
     */
    public function getNewDevice()
    {
        return $this->newDevice;
    }

    /**
     * @param \string[] $newDevice
     */
    public function setNewDevice($newDevice)
    {
        $this->newDevice = $newDevice;
    }

    /**
     * @return \string[]
     */
    public function getDevicePrice()
    {
        return $this->devicePrice;
    }

    /**
     * @param \string[] $devicePrice
     */
    public function setDevicePrice($devicePrice)
    {
        $this->devicePrice = $devicePrice;
    }

    /**
     * @return \string[]
     */
    public function getNetworkType()
    {
        return $this->networkType;
    }

    /**
     * @param \string[] $networkType
     */
    public function setNetworkType($networkType)
    {
        $this->networkType = $networkType;
    }

    /**
     * @return \string[]
     */
    public function getNetworkOperator()
    {
        return $this->networkOperator;
    }

    /**
     * @param \string[] $networkOperator
     */
    public function setNetworkOperator($networkOperator)
    {
        $this->networkOperator = $networkOperator;
    }

    /**
     * @return \string[]
     */
    public function getDressingIndex()
    {
        return $this->dressingIndex;
    }

    /**
     * @param \string[] $dressingIndex
     */
    public function setDressingIndex($dressingIndex)
    {
        $this->dressingIndex = $dressingIndex;
    }

    /**
     * @return \string[]
     */
    public function getUvIndex()
    {
        return $this->uvIndex;
    }

    /**
     * @param \string[] $uvIndex
     */
    public function setUvIndex($uvIndex)
    {
        $this->uvIndex = $uvIndex;
    }

    /**
     * @return \string[]
     */
    public function getMakeupIndex()
    {
        return $this->makeupIndex;
    }

    /**
     * @param \string[] $makeupIndex
     */
    public function setMakeupIndex($makeupIndex)
    {
        $this->makeupIndex = $makeupIndex;
    }

    /**
     * @return \string[]
     */
    public function getClimate()
    {
        return $this->climate;
    }

    /**
     * @param \string[] $climate
     */
    public function setClimate($climate)
    {
        $this->climate = $climate;
    }

    /**
     * @return \string[]
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * @param \string[] $temperature
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;
    }

    /**
     * @return \string[]
     */
    public function getAppInstallStatus()
    {
        return $this->appInstallStatus;
    }

    /**
     * @param \string[] $appInstallStatus
     */
    public function setAppInstallStatus($appInstallStatus)
    {
        $this->appInstallStatus = $appInstallStatus;
    }

    /**
     * @return AppBehavior
     */
    public function getAppBehavior()
    {
        return $this->appBehavior;
    }

    /**
     * @param AppBehavior $appBehavior
     */
    public function setAppBehavior($appBehavior)
    {
        $this->appBehavior = $appBehavior;
    }

    /**
     * @return \string[]
     */
    public function getShoppingCapability()
    {
        return $this->shoppingCapability;
    }

    /**
     * @param \string[] $shoppingCapability
     */
    public function setShoppingCapability($shoppingCapability)
    {
        $this->shoppingCapability = $shoppingCapability;
    }

    /**
     * @return \string[]
     */
    public function getPlayerConsupt()
    {
        return $this->playerConsupt;
    }

    /**
     * @param \string[] $playerConsupt
     */
    public function setPlayerConsupt($playerConsupt)
    {
        $this->playerConsupt = $playerConsupt;
    }

    /**
     * @return \string[]
     */
    public function getPayingUserType()
    {
        return $this->payingUserType;
    }

    /**
     * @param \string[] $payingUserType
     */
    public function setPayingUserType($payingUserType)
    {
        $this->payingUserType = $payingUserType;
    }

    /**
     * @return \string[]
     */
    public function getResidentialCommunityPrice()
    {
        return $this->residentialCommunityPrice;
    }

    /**
     * @param \string[] $residentialCommunityPrice
     */
    public function setResidentialCommunityPrice($residentialCommunityPrice)
    {
        $this->residentialCommunityPrice = $residentialCommunityPrice;
    }

    /**
     * @return \int[]
     */
    public function getCustomAudience()
    {
        return $this->customAudience;
    }

    /**
     * @param \int[] $customAudience
     */
    public function setCustomAudience($customAudience)
    {
        $this->customAudience = $customAudience;
    }

    /**
     * @return \int[]
     */
    public function getExcludedCustomAudience()
    {
        return $this->excludedCustomAudience;
    }

    /**
     * @param \int[] $excludedCustomAudience
     */
    public function setExcludedCustomAudience($excludedCustomAudience)
    {
        $this->excludedCustomAudience = $excludedCustomAudience;
    }


=======
    public $education = [];
>>>>>>> ee0a365a9be482829ccbafe9b68fd61f4d36faff
}
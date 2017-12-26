<?php


namespace Brookin\MarketingAPI\Targeting;


class GeoLocation
{
    /**
     * @var string[]
     */
    protected $locationTypes;

    /**
     * @var int[]
     */
    protected $regions;

    /**
     * @var int[]
     */
    protected $businessDistricts;

    /**
     * @var CustomLocations
     */
    protected $customLocations;

    /**
     * @return \string[]
     */
    public function getLocationTypes()
    {
        return $this->locationTypes;
    }

    /**
     * @param \string[] $locationTypes
     */
    public function setLocationTypes($locationTypes)
    {
        $this->locationTypes = $locationTypes;
    }

    /**
     * @return \int[]
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * @param \int[] $regions
     */
    public function setRegions($regions)
    {
        $this->regions = $regions;
    }

    /**
     * @return \int[]
     */
    public function getBusinessDistricts()
    {
        return $this->businessDistricts;
    }

    /**
     * @param \int[] $businessDistricts
     */
    public function setBusinessDistricts($businessDistricts)
    {
        $this->businessDistricts = $businessDistricts;
    }

    /**
     * @return CustomLocations
     */
    public function getCustomLocations()
    {
        return $this->customLocations;
    }

    /**
     * @param CustomLocations $customLocations
     */
    public function setCustomLocations($customLocations)
    {
        $this->customLocations = $customLocations;
    }


}
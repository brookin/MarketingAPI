<?php


namespace Brookin\MarketingAPI\CustomAudience;


class LbsSpec
{
    /**
     * @var string
     */
    protected $lbsType;

    /**
     * @var CrossCityRule
     */
    protected $crossCityRule;

    /**
     * @var PoiRule
     */
    protected $poiRule;

    /**
     * @return string
     */
    public function getLbsType()
    {
        return $this->lbsType;
    }

    /**
     * @param string $lbsType
     */
    public function setLbsType($lbsType)
    {
        $this->lbsType = $lbsType;
    }

    /**
     * @return CrossCityRule
     */
    public function getCrossCityRule()
    {
        return $this->crossCityRule;
    }

    /**
     * @param CrossCityRule $crossCityRule
     */
    public function setCrossCityRule($crossCityRule)
    {
        $this->crossCityRule = $crossCityRule;
    }

    /**
     * @return PoiRule
     */
    public function getPoiRule()
    {
        return $this->poiRule;
    }

    /**
     * @param PoiRule $poiRule
     */
    public function setPoiRule($poiRule)
    {
        $this->poiRule = $poiRule;
    }


}
<?php


namespace Brookin\MarketingAPI\Estimation;


use Brookin\MarketingAPI\Request;

class EstimationGetRequest extends Request
{
    /**
     * @var int
     */
    protected $accountId;

    /**
     * @var \Brookin\MarketingAPI\Adgroup\Adgroup
     */
    protected $adgroup;

    /**
     * @var \Brookin\MarketingAPI\Adcreative\Adcreative[]
     */
    protected $adcreative;

    /**
     * @var \Brookin\MarketingAPI\Targeting\TargetingInfo
     */
    protected $targeting;

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
     * @return \Brookin\MarketingAPI\Adgroup\Adgroup
     */
    public function getAdgroup()
    {
        return $this->adgroup;
    }

    /**
     * @param \Brookin\MarketingAPI\Adgroup\Adgroup $adgroup
     */
    public function setAdgroup($adgroup)
    {
        $this->adgroup = $adgroup;
    }

    /**
     * @return \Brookin\MarketingAPI\Adcreative\Adcreative[]
     */
    public function getAdcreative()
    {
        return $this->adcreative;
    }

    /**
     * @param \Brookin\MarketingAPI\Adcreative\Adcreative[] $adcreative
     */
    public function setAdcreative($adcreative)
    {
        $this->adcreative = $adcreative;
    }

    /**
     * @return \Brookin\MarketingAPI\Targeting\TargetingInfo
     */
    public function getTargeting()
    {
        return $this->targeting;
    }

    /**
     * @param \Brookin\MarketingAPI\Targeting\TargetingInfo $targeting
     */
    public function setTargeting($targeting)
    {
        $this->targeting = $targeting;
    }


}
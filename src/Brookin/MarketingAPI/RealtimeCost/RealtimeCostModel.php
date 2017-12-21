<?php


namespace Brookin\MarketingAPI\RealtimeCost;


class RealtimeCostModel
{
    /**
     * @var string
     */
    protected $campaignId;

    /**
     * @var string
     */
    protected $adgroupId;

    /**
     * @var integer
     */
    protected $cost;


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
    public function getAdgroupId()
    {
        return $this->adgroupId;
    }

    /**
     * @param string
     */
    public function setAdgroupId($adgroupId)
    {
        $this->adgroupId = $adgroupId;
    }

    /**
     * @return integer
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param integer
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    }
}
<?php
/**
 * Created by PhpStorm.
 * Date: 12/7/17
 * Time: 7:39 PM
 */

namespace Brookin\MarketingAPI\Campaign;


use Brookin\MarketingAPI\GetRequest;

class CampaignGetRequest extends GetRequest
{

    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    protected $campaignId;


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

}
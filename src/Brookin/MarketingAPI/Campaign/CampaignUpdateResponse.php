<?php
/**
 * Created by PhpStorm.
 * Date: 12/7/17
 * Time: 7:39 PM
 */

namespace Brookin\MarketingAPI\Campaign;


use Brookin\MarketingAPI\Response;

class CampaignUpdateResponse extends Response
{

    /**
     * @var int
     */
    public $campaignId;

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
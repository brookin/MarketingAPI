<?php
/**
 * Created by PhpStorm.
 * Date: 12/7/17
 * Time: 4:42 PM
 */

namespace Brookin\MarketingAPI\Campaign;


use Brookin\MarketingAPI\Client;
use Brookin\MarketingAPI\RestClient;

class Campaign extends RestClient
{

    public function add(CampaignAddRequest $request, CampaignAddResponse $response) {
        $this->send(self::POST, $this->getPath(__METHOD__), $request, $response);
    }

}
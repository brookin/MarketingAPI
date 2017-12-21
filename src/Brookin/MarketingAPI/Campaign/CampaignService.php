<?php
/**
 * Created by PhpStorm.
 * Date: 12/7/17
 * Time: 4:42 PM
 */

namespace Brookin\MarketingAPI\Campaign;


use Brookin\MarketingAPI\Client;
use Brookin\MarketingAPI\RestClient;

class CampaignService extends RestClient
{

    public function add(CampaignAddRequest $request, CampaignAddResponse $response) {
        //$this->send(self::POST, $this->getPath(__METHOD__), $request, $response);
        $this->doPost($request, $response);
    }

    public function update(CampaignUpdateRequest $request, CampaignUpdateResponse $response) {
        $this->doPost($request, $response);
        //$this->send(self::POST, $this->getPath(__METHOD__), $request, $response);
    }

    public function get(CampaignGetRequest $request, CampaignGetResponse $response) {
        $this->doGet($request, $response);
        //$this->send(self::GET, $this->getPath(__METHOD__), $request, $response);
    }

}
<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 9:29 AM
 */

namespace Brookin\MarketingAPI\Adgroup;


use Brookin\MarketingAPI\RestClient;

class Adgroup extends RestClient
{
    public function add(AdgroupAddRequest $request, AdgroupAddResponse $response) {
        $this->send(self::POST, $this->getPath(__METHOD__), $request, $response);
    }

    public function update(AdgroupUpdateRequest $request, AdgroupUpdateResponse $response) {
        $this->send(self::POST, $this->getPath(__METHOD__), $request, $response);
    }

    public function get(AdgroupGetRequest $request, AdgroupGetResponse $response) {
        $this->send(self::GET, $this->getPath(__METHOD__), $request, $response);
    }
}
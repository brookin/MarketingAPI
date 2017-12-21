<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:39 PM
 */

namespace Brookin\MarketingAPI\Ad;


use Brookin\MarketingAPI\Response;
use Brookin\MarketingAPI\RestClient;

class AdService extends RestClient
{

    public function add(AdAddRequest $request, AdAddResponse $response) {
        $this->send(self::POST, $this->getPath(__METHOD__), $request, $response);
    }

    public function update(AdUpdateRequest $request, AdUpdateResponse $response) {
        $this->send(self::POST, $this->getPath(__METHOD__), $request, $response);
    }

    public function get(AdGetRequest $request, AdGetResponse $response) {
        $this->send(self::GET, $this->getPath(__METHOD__), $request, $response);
    }
}
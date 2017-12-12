<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:39 PM
 */

namespace Brookin\MarketingAPI\Ad;


use Brookin\MarketingAPI\Response;
use Brookin\MarketingAPI\RestClient;

class Ad extends RestClient
{

    public function add(AdAddRequest $request, AdAddResponse $response) {
        $this->send(self::POST, $this->getPath(__METHOD__), $request, $response);
    }
}
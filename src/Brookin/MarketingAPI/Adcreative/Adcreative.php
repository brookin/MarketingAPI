<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 9:29 AM
 */

namespace Brookin\MarketingAPI\Adcreative;


use Brookin\MarketingAPI\Client;
use Brookin\MarketingAPI\RestClient;

class Adcreative extends RestClient
{

    public function add(AdcreativeAddRequest $request, AdcreativeAddResponse $response) {
        $this->send(self::POST, $this->getPath(__METHOD__), $request, $response);
    }

}
<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 10:26 AM
 */

namespace Brookin\MarketingAPI\Targeting;


use Brookin\MarketingAPI\RestClient;

class Targeting extends RestClient
{
    public function add(TargetingAddRequest $request, TargetingAddResponse $response) {
        $this->send(self::POST, $this->getPath(__METHOD__), $request, $response);
    }
}
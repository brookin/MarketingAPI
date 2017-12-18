<?php
/**
 * Created by PhpStorm.
 * Date: 12/12/17
 * Time: 2:59 PM
 */

namespace Brookin\MarketingAPI\Ad;


use Brookin\MarketingAPI\Request;

class AdGetRequest extends Request
{
    public $accountId;

    public $adId;
}
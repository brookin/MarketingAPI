<?php
/**
 * Created by PhpStorm.
 * Date: 12/7/17
 * Time: 3:20 PM
 */

namespace Brookin\MarketingAPI\Image;


use Brookin\MarketingAPI\Request;

class ImageAddRequest extends Request
{

    public $accountId;

    public $file;

    public $signature;

}
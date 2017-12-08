<?php
/**
 * Created by PhpStorm.
 * Date: 12/7/17
 * Time: 3:21 PM
 */

namespace Brookin\MarketingAPI\Image;


use Brookin\MarketingAPI\Response;

class ImageAddResponse extends Response
{


    public $imageId;

    public $width;

    public $height;

    public $fileSize;

    public $type;

    public $signature;

    public $previewUrl;
}
<?php
/**
 * Created by PhpStorm.
 * Date: 12/7/17
 * Time: 3:23 PM
 */

namespace Brookin\MarketingAPI\Image;


use Brookin\MarketingAPI\RestClient;

class ImageService extends RestClient
{

//    public function getPath($method) {
//        $this->path = sprintf('/%ss/%s', $this->getModuleName(), $this->getActionName($method));
//        return $this->path;
//    }

    public function add(ImageAddRequest $request, ImageAddResponse $response) {
//        $this->send(self::POST, $this->getPath(__METHOD__), $request, $response, true);
        $this->doPost($request, $response);
    }

}
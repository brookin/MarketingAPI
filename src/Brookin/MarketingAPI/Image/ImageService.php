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

    public function add(ImageAddRequest $request, ImageAddResponse $response) {
        $this->doPost($request, $response);
    }

    public function get(ImageGetRequest $request, ImageGetResponse $response)
    {
        $this->doGet($request, $response);
    }

}
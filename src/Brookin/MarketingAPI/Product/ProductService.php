<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:57 PM
 */

namespace Brookin\MarketingAPI\Product;


use Brookin\MarketingAPI\RestClient;

class ProductService extends RestClient
{
    public function add(ProductAddRequest $request, ProductAddResponse $response)
    {
        $this->doPost($request, $response);
    }

    public function update(ProductUpdateRequest $request, ProductUpdateResponse $response)
    {
        $this->doPost($request, $response);
    }

    public function get(ProductGetRequest $request, ProductGetResponse $response)
    {
        $this->doGet($request, $response);
    }
}
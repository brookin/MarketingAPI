<?php
/**
 * Created by PhpStorm.
 * Date: 12/7/17
 * Time: 3:36 PM
 */

namespace Brookin\MarketingAPITest;

use Brookin\MarketingAPI\Image\Image;
use Brookin\MarketingAPI\Image\ImageAddRequest;
use Brookin\MarketingAPI\Image\ImageAddResponse;

class ImageTest extends \PHPUnit_Framework_TestCase
{

    public function testAdd()
    {
        $request = new ImageAddRequest();
        $response = new ImageAddResponse();
//        $file = './tests/rule.jpg';
        $file = './160x210.png';
        $client = new Image();
        $request->accountId = [
            'name' => 'account_id',
            'contents' => MARKETING_API_AGENCY_ID
        ];
        $request->signature = [
            'name' => 'signature',
            'contents' => md5_file($file),
        ];
        $request->file = [
            'name' => 'file',
            'contents' => fopen($file, 'r'),
        ];

        $client->add($request, $response);
        println($response);
    }

}
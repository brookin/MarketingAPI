<?php
/**
 * Created by PhpStorm.
 * Date: 12/7/17
 * Time: 3:36 PM
 */

namespace Brookin\MarketingAPITest;

use Brookin\MarketingAPI\Image\ImageGetRequest;
use Brookin\MarketingAPI\Image\ImageGetResponse;
use Brookin\MarketingAPI\Image\ImageService;
use Brookin\MarketingAPI\Image\ImageAddRequest;
use Brookin\MarketingAPI\Image\ImageAddResponse;
use Brookin\MarketingAPI\UploadFileStruct;

class ImageTest extends \PHPUnit_Framework_TestCase
{

    public function testAdd()
    {
        $request = new ImageAddRequest();
        $response = new ImageAddResponse();
        $client = new ImageService();

        $file = './tests/1602101.png';

        $uploadFile = new UploadFileStruct();
        $uploadFile->setFilePath($file);

        $request->accountId = MARKETING_API_ADVERTISER_ID;
        $request->signature = md5_file($file);

        $request->file = $uploadFile;

        $client->add($request, $response);
        $this->assertGreaterThan(0, $response->getHeight(), 'add image error');
    }

    public function testGet()
    {
        $request = new ImageGetRequest();
        $response = new ImageGetResponse();
        $client = new ImageService();

        $request->setAccountId(MARKETING_API_ADVERTISER_ID);


        $client->get($request, $response);
        $this->assertNotNull($response->getList(), 'get image error');
    }
}

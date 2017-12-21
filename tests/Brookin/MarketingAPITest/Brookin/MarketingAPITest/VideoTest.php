<?php


namespace Brookin\MarketingAPITest;


use Brookin\MarketingAPI\UploadFileStruct;
use Brookin\MarketingAPI\Video\VideoGetRequest;
use Brookin\MarketingAPI\Video\VideoGetResponse;
use Brookin\MarketingAPI\Video\VideoService;
use Brookin\MarketingAPI\Video\VideoAddRequest;
use Brookin\MarketingAPI\Video\VideoAddResponse;

class VideoTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $request = new VideoAddRequest();
        $response = new VideoAddResponse();

        $request->setAccountId(MARKETING_API_ADVERTISER_ID);
        $filePath = './tests/aaaa.mp4';
        $request->setSignature(md5_file($filePath));
        $struct = new UploadFileStruct();
        $struct->setFilePath($filePath);
        $request->setVideoFile($struct);
        $service = new VideoService();
        $service->add($request, $response);
        println($response);
    }

    public function testGet()
    {
        $request = new VideoGetRequest();
        $response = new VideoGetResponse();

        $request->setAccountId(MARKETING_API_ADVERTISER_ID);
        $request->setVideoId(MARKETING_API_VIDEO_ID);
        $service = new VideoService();
        $service->get($request, $response);
        println($response);
    }
}
<?php


namespace Brookin\MarketingAPI\Video;


use Brookin\MarketingAPI\RestClient;

class VideoService extends RestClient
{
    public function add(VideoAddRequest $request, VideoAddResponse $response)
    {
        $this->doPost($request, $response);
    }

    public function get(VideoGetRequest $request, VideoGetResponse $response)
    {
        $this->doGet($request, $response);
    }
}
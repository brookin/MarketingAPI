<?php
/**
 * Created by PhpStorm.
 * Date: 11/26/17
 * Time: 7:23 PM
 */

namespace Brookin\MarketingAPI;

use GuzzleHttp\RequestOptions;

class Client
{

    public $urlPrefix = 'https://sandbox-api.e.qq.com/v1.0';

    const POST = 'POST';

    const GET = 'GET';

    public $client;

    public $defaultOptions;

    protected $path;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
        $this->defaultOptions = [
            RequestOptions::QUERY => [
                'access_token' => $this->getToken(),
                'timestamp' => time(),
                'nonce' => md5(time().rand(1,1000))
            ],
        ];
    }

    public function getModuleName()
    {
        return strtolower((new \ReflectionClass(static::class))->getShortName());
    }

    public function getActionName($methodName)
    {
        return  explode('::', $methodName)[1];
    }

    public function getToken()
    {
        return MARKETING_API_CLIENT_TOKEN;
    }

    public function getPath($method) {
        $this->path = sprintf('/%s/%s', $this->getModuleName(), $this->getActionName($method));
        return $this->path;
    }

    public function send($method, $path, Request $request, Response $response, $upload = false) {

        $url = $this->urlPrefix.$path;

        $options = [];
        if ($method == 'GET') {
            $options = array_merge_recursive($this->defaultOptions, [
                RequestOptions::QUERY => $request->toArray(),
            ]);
        } else if ($method == 'POST') {
            if (!$upload) {
                $options = array_merge_recursive($this->defaultOptions, [
                    RequestOptions::FORM_PARAMS => $request->toArray(),
                ]);
            } else {
                $tmp = $request->toArray();
                $options = array_merge_recursive($this->defaultOptions, [
                    RequestOptions::MULTIPART => array_values($tmp),
                ]);
            }
        }

        println($options);

        $res = $this->client->request($method, $url, $options);

        print_r($res->getBody()->getContents());

    }
}
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

    public $urlPrefix = MARKETING_API_API_URL_PREFIX;

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
        $suffix = '_service';
        $suffixLen = strlen($suffix);
        $nameUnderscore = strtolower(Request::uncamelize((new \ReflectionClass(static::class))->getShortName()));
        $moduleName = $nameUnderscore;
        if (substr($nameUnderscore, 0 - $suffixLen, $suffixLen) === $suffix) {
            $moduleName = substr($nameUnderscore, 0, strlen($nameUnderscore) - $suffixLen);
        }
        return $moduleName;
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

    public function getRequestPath(Request $request)
    {
        $this->path = sprintf('/%s/%s', $this->getModuleName(), $request->getApiRequestMethod());
        return $this->path;
    }

    public function doPost(Request $request, Response $response, $upload = false)
    {
        $this->send(self::POST, $this->getRequestPath($request), $request, $response , $upload);
    }

    public function doGet(Request $request, Response $response)
    {
        $this->send(self::GET, $this->getRequestPath($request), $request, $response);
    }

    public function isUpload(Request $request)
    {

    }

    public function send($method, $path, Request $request, Response $response, $upload = false) {

        $url = $this->urlPrefix.$path;

        $options = [];
        if ($method == 'GET') {
            $options = array_merge_recursive($this->defaultOptions, [
                RequestOptions::QUERY => $request->toArray(),
            ]);
        } else if ($method == 'POST') {
            if ($request->getGuzzleRequestEnctype() === RequestOptions::MULTIPART) {
                $options = array_merge_recursive($this->defaultOptions, $request->toFormDataArray());
            } else {
                $options = array_merge_recursive($this->defaultOptions, [
                    RequestOptions::FORM_PARAMS => $request->toArray(),
                ]);
            }
        }
//        println($options);
        $res = $this->client->request($method, $url, $options);
        $result = json_decode($res->getBody()->getContents(), true);
        if (!isset($result['code'])) {
            throw new \Exception('result structure error', 100);
        }

        if ($result['code'] != 0) {
            println($result);
            throw new \Exception('request failed, code: '.$result['code'], 101);
        }

        $data = json_decode(json_encode($result['data']));
        $mapper = new \JsonMapper();
        $mapper->map($data, $response);

    }
}
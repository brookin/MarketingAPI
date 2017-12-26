<?php


namespace Brookin\MarketingAPI\UserAction;


use Brookin\MarketingAPI\Response;
use Brookin\MarketingAPI\RestClient;
use Psr\Http\Message\ResponseInterface;

class UserActionService extends RestClient
{
    public function add(UserActionAddRequest $request, UserActionAddResponse $response)
    {
        $this->doPost($request, $response);
    }

    public function afterSend(ResponseInterface $res, Response $response)
    {
        $result = json_decode($res->getBody()->getContents(), true);
        if (!isset($result['code'])) {
            throw new \Exception('result structure error', 100);
        }

        if ($result['code'] != 0) {
            $message = $result['code'];
            if (isset($result['message'])) {
                $message = $result['message'];
            }
            throw new \Exception('request failed, code: '.$message, 101);
        }

    }
}
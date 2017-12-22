<?php


namespace Brookin\MarketingAPI\UserData;


use Brookin\MarketingAPI\RestClient;

class UserActionSetService extends RestClient
{
    public function add(UserActionSetAddRequest $request, UserActionSetAddResponse $response)
    {
        $this->doPost($request, $response);
    }

    public function get(UserActionSetGetRequest $request, UserActionSetGetResponse $response)
    {
        $this->doGet($request, $response);
    }


}
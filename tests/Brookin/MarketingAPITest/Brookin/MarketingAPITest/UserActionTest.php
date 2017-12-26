<?php


namespace Brookin\MarketingAPITest;


use Brookin\MarketingAPI\UserAction\Action;
use Brookin\MarketingAPI\UserAction\UserActionAddRequest;
use Brookin\MarketingAPI\UserAction\UserActionAddResponse;
use Brookin\MarketingAPI\UserAction\UserActionService;
use Brookin\MarketingAPI\UserAction\UserId;

class UserActionTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $request = new UserActionAddRequest();
        $response = new UserActionAddResponse();
        $service = new UserActionService();

        $request->setAccountId(MARKETING_API_ADVERTISER_ID);

        $action = new Action();
        $action->setUserActionSetId(MARKETING_API_USER_ACTION_SET_ID);
        $action->setActionTime(time());
        $action->setActionType('CUSTOM');

        $userId = new UserId();
        $userId->setHashImei('f9efca36a3c30e1cf28170d86ecbf5e9');
        $action->setCustomAction('test');

        $action->setUserId($userId);
        $request->setActions([$action]);

        $service->add($request, $response);
    }
}
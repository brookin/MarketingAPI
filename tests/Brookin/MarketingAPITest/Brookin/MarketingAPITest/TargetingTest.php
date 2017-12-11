<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 10:28 AM
 */

namespace Brookin\MarketingAPITest;

use Brookin\MarketingAPI\Targeting\Targeting;
use Brookin\MarketingAPI\Targeting\TargetingAddRequest;
use Brookin\MarketingAPI\Targeting\TargetingAddResponse;

class TargetingTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $request = new TargetingAddRequest();
        $response = new TargetingAddResponse();
        $request->accountId = MARKETING_API_ADVERTISER_ID;
        $request->targetingName = 'targetingName'.date('Y-m-d H:i:s');

        $service = new Targeting();
        $service->add($request, $response);

    }

}

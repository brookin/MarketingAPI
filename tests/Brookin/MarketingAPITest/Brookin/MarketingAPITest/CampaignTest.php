<?php
/**
 * Created by PhpStorm.
 * Date: 12/7/17
 * Time: 7:45 PM
 */

namespace Brookin\MarketingAPITest;

use Brookin\MarketingAPI\Campaign\Campaign;
use Brookin\MarketingAPI\Campaign\CampaignAddRequest;
use Brookin\MarketingAPI\Campaign\CampaignAddResponse;

class CampaignTest extends \PHPUnit_Framework_TestCase
{

    public function testAdd() {
        $request = new CampaignAddRequest();
        $response = new CampaignAddResponse();

        $request->accountId = MARKETING_API_ADVERTISER_ID;
        $request->campaignName = '推广计划 '.date('Ymd H:i:s');
        $request->campaignType = 'CAMPAIGN_TYPE_NORMAL';
        $request->productType = 'PRODUCT_TYPE_LINK';
        $request->dailyBudget = 50000;
        $request->configuredStatus = 'AD_STATUS_NORMAL';
        $request->speedMode = 'SPEED_MODE_FAST';

        $service = new Campaign();
        $service->add($request, $response);
    }

}

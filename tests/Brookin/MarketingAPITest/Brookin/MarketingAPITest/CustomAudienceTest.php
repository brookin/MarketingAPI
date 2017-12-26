<?php


namespace Brookin\MarketingAPITest;


use Brookin\MarketingAPI\CustomAudience\AudienceSpec;
use Brookin\MarketingAPI\CustomAudience\CustomAudienceAddRequest;
use Brookin\MarketingAPI\CustomAudience\CustomAudienceAddResponse;
use Brookin\MarketingAPI\CustomAudience\CustomAudienceGetRequest;
use Brookin\MarketingAPI\CustomAudience\CustomAudienceGetResponse;
use Brookin\MarketingAPI\CustomAudience\CustomAudienceService;
use Brookin\MarketingAPI\CustomAudience\KeywordSpec;
use Brookin\MarketingAPI\CustomAudience\LookalikeSpec;

class CustomAudienceTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $request = new CustomAudienceAddRequest();
        $response = new CustomAudienceAddResponse();
        $service = new CustomAudienceService();

        $request->setAccountId(MARKETING_API_ADVERTISER_ID);
        $request->setName('test' . rand(1000,100000));
        $request->setType('KEYWORD');
        $request->setDescription('test');


        $spec = new AudienceSpec();
//
//        $look = new lookalikeSpec();
//        $look->setSeedAudienceId()
//        $spec->setKeywordSpec()
        $info = new KeywordSpec();
        $info->setExcludeKeyword(['exclude_key']);
        $info->setIncludeKeyword(['include_key']);
        $spec->setKeywordSpec($info);
        $request->setAudienceSpec($spec);
        $service->add($request, $response);
        $this->assertGreaterThan(0, $response->getAudienceId(), 'add custom audience error');
    }

    public function testGet()
    {
        $request = new CustomAudienceGetRequest();
        $response = new CustomAudienceGetResponse();
        $service = new CustomAudienceService();

        $request->setAccountId(MARKETING_API_ADVERTISER_ID);

        $service->get($request, $response);
        $this->assertNotNull($response->getList(), 'get custom audience error');
    }
}
<?php
/**
 * Created by PhpStorm.
 * Date: 11/28/17
 * Time: 11:50 PM
 */

namespace Brookin\MarketingAPI\Advertiser;


use Brookin\MarketingAPI\Request;

class AdvertiserAddRequest extends Request
{

    public $corporationName;

    public $certificationImageId;

    public $website;

    public $industryQualificationImageIdList;

    public $systemIndustryId;
}
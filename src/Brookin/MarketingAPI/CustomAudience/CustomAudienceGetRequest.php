<?php


namespace Brookin\MarketingAPI\CustomAudience;


use Brookin\MarketingAPI\GetRequest;

class CustomAudienceGetRequest extends GetRequest
{
    /**
     * @var int
     */
    protected $accountId;

    /**
     * @var int
     */
    protected $audienceId;


    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param int $accountId
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    /**
     * @return int
     */
    public function getAudienceId()
    {
        return $this->audienceId;
    }

    /**
     * @param int $audienceId
     */
    public function setAudienceId($audienceId)
    {
        $this->audienceId = $audienceId;
    }


}
<?php


namespace Brookin\MarketingAPI\Report;


use Brookin\MarketingAPI\GetRequest;

class DailyReportGetRequest extends GetRequest
{
    /**
     * @var int
     */
    protected $accountId;

    /**
     * @var string
     */
    protected $level;


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
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param string $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }


}
<?php


namespace Brookin\MarketingAPI\RealtimeCost;


use Brookin\MarketingAPI\GetRequest;

class RealtimeCostGetRequest extends GetRequest
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $date;


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

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }


}
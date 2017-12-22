<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:17 PM
 */

namespace Brookin\MarketingAPI\Report;


use Brookin\MarketingAPI\Request;

class HourlyReportGetRequest extends Request
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
    protected $date;

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
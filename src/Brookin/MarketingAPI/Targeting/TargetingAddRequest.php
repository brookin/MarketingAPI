<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 10:26 AM
 */

namespace Brookin\MarketingAPI\Targeting;


use Brookin\MarketingAPI\Request;

class TargetingAddRequest extends Request
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $targetingName;

    /**
     * @var TargetingInfo
     */
    public $targeting;

    /**
     * @var string
     */
    public $description;

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
    public function getTargetingName()
    {
        return $this->targetingName;
    }

    /**
     * @param string $targetingName
     */
    public function setTargetingName($targetingName)
    {
        $this->targetingName = $targetingName;
    }

    /**
     * @return TargetingInfo
     */
    public function getTargeting()
    {
        return $this->targeting;
    }

    /**
     * @param TargetingInfo $targeting
     */
    public function setTargeting($targeting)
    {
        $this->targeting = $targeting;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }



}
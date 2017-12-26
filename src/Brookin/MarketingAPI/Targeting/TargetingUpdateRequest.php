<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 2:13 PM
 */

namespace Brookin\MarketingAPI\Targeting;


use Brookin\MarketingAPI\Request;

class TargetingUpdateRequest extends Request
{

    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $targetingId;

    /**
     * @var string
     */
    protected $targetingName;

    /**
     * @var TargetingInfo
     */
    protected $targeting;

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
     * @return int
     */
    public function getTargetingId()
    {
        return $this->targetingId;
    }

    /**
     * @param int $targetingId
     */
    public function setTargetingId($targetingId)
    {
        $this->targetingId = $targetingId;
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
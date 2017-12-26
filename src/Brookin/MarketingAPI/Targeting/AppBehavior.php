<?php


namespace Brookin\MarketingAPI\Targeting;


class AppBehavior
{
    /**
     * @var string
     */
    protected $objectType;

    /**
     * @var int[]
     */
    protected $objectIdList;

    /**
     * @var int
     */
    protected $timeWindow;

    /**
     * @var string[]
     */
    protected $actIdList;

    /**
     * @return string
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * @param string $objectType
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    }

    /**
     * @return \int[]
     */
    public function getObjectIdList()
    {
        return $this->objectIdList;
    }

    /**
     * @param \int[] $objectIdList
     */
    public function setObjectIdList($objectIdList)
    {
        $this->objectIdList = $objectIdList;
    }

    /**
     * @return int
     */
    public function getTimeWindow()
    {
        return $this->timeWindow;
    }

    /**
     * @param int $timeWindow
     */
    public function setTimeWindow($timeWindow)
    {
        $this->timeWindow = $timeWindow;
    }

    /**
     * @return \string[]
     */
    public function getActIdList()
    {
        return $this->actIdList;
    }

    /**
     * @param \string[] $actIdList
     */
    public function setActIdList($actIdList)
    {
        $this->actIdList = $actIdList;
    }


}
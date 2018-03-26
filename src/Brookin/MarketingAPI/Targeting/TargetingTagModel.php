<?php


namespace Brookin\MarketingAPI\Targeting;


class TargetingTagModel
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var integer
     */
    protected $parentId;

    /**
     * @var string
     */
    protected $cityLevel;


    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return integer
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @param integer
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    }

    /**
     * @return string
     */
    public function getCityLevel()
    {
        return $this->cityLevel;
    }

    /**
     * @param string
     */
    public function setCityLevel($cityLevel)
    {
        $this->cityLevel = $cityLevel;
    }
}
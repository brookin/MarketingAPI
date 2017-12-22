<?php


namespace Brookin\MarketingAPI\UserData;


class UserActionSetReport
{
    /**
     * @var string
     */
    protected $date;

    /**
     * @var string
     */
    protected $hour;

    /**
     * @var string
     */
    protected $domain;

    /**
     * @var integer
     */
    protected $rawActionCount;

    /**
     * @var integer
     */
    protected $identifiedActionCount;

    /**
     * @var integer
     */
    protected $identifiedUserCount;


    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * @param string
     */
    public function setHour($hour)
    {
        $this->hour = $hour;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param string
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    /**
     * @return integer
     */
    public function getRawActionCount()
    {
        return $this->rawActionCount;
    }

    /**
     * @param integer
     */
    public function setRawActionCount($rawActionCount)
    {
        $this->rawActionCount = $rawActionCount;
    }

    /**
     * @return integer
     */
    public function getIdentifiedActionCount()
    {
        return $this->identifiedActionCount;
    }

    /**
     * @param integer
     */
    public function setIdentifiedActionCount($identifiedActionCount)
    {
        $this->identifiedActionCount = $identifiedActionCount;
    }

    /**
     * @return integer
     */
    public function getIdentifiedUserCount()
    {
        return $this->identifiedUserCount;
    }

    /**
     * @param integer
     */
    public function setIdentifiedUserCount($identifiedUserCount)
    {
        $this->identifiedUserCount = $identifiedUserCount;
    }
}
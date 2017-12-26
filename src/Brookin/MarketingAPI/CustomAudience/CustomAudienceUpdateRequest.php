<?php


namespace Brookin\MarketingAPI\CustomAudience;


use Brookin\MarketingAPI\Request;

class CustomAudienceUpdateRequest extends Request
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
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

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

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
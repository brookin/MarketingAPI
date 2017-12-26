<?php


namespace Brookin\MarketingAPI\CustomAudience;


use Brookin\MarketingAPI\Request;

class CustomAudienceAddRequest extends Request
{
    /**
     * @var int
     */
    protected $accountId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var AudienceSpec
     */
    protected $audienceSpec;

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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
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

    /**
     * @return AudienceSpec
     */
    public function getAudienceSpec()
    {
        return $this->audienceSpec;
    }

    /**
     * @param AudienceSpec $audienceSpec
     */
    public function setAudienceSpec($audienceSpec)
    {
        $this->audienceSpec = $audienceSpec;
    }


}
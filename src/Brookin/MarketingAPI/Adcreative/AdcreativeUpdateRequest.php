<?php
/**
 * Created by PhpStorm.
 * Date: 12/12/17
 * Time: 12:23 PM
 */

namespace Brookin\MarketingAPI\Adcreative;


use Brookin\MarketingAPI\Request;

class AdcreativeUpdateRequest extends Request
{

    /**
     * @var int
     */
    protected $accountId;

    /**
     * @var int
     */
    protected $adcreativeId;

    /**
     * @var string
     */
    protected $adcreativeName;

    /**
     * @var AdcreativeElements
     */
    protected $adcreativeElements;

    /**
     * @var string
     */
    protected $destinationUrl;

    /**
     * @var string
     */
    protected $deepLink;

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
    public function getAdcreativeId()
    {
        return $this->adcreativeId;
    }

    /**
     * @param int $adcreativeId
     */
    public function setAdcreativeId($adcreativeId)
    {
        $this->adcreativeId = $adcreativeId;
    }

    /**
     * @return string
     */
    public function getAdcreativeName()
    {
        return $this->adcreativeName;
    }

    /**
     * @param string $adcreativeName
     */
    public function setAdcreativeName($adcreativeName)
    {
        $this->adcreativeName = $adcreativeName;
    }

    /**
     * @return AdcreativeElements
     */
    public function getAdcreativeElements()
    {
        return $this->adcreativeElements;
    }

    /**
     * @param AdcreativeElements $adcreativeElements
     */
    public function setAdcreativeElements($adcreativeElements)
    {
        $this->adcreativeElements = $adcreativeElements;
    }

    /**
     * @return string
     */
    public function getDestinationUrl()
    {
        return $this->destinationUrl;
    }

    /**
     * @param string $destinationUrl
     */
    public function setDestinationUrl($destinationUrl)
    {
        $this->destinationUrl = $destinationUrl;
    }

    /**
     * @return string
     */
    public function getDeepLink()
    {
        return $this->deepLink;
    }

    /**
     * @param string $deepLink
     */
    public function setDeepLink($deepLink)
    {
        $this->deepLink = $deepLink;
    }


}
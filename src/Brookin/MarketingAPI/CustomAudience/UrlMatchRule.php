<?php


namespace Brookin\MarketingAPI\CustomAudience;


class UrlMatchRule
{
    /**
     * @var UrlMatcherGroup
     */
    protected $urlMatcherGroup;

    /**
     * @return UrlMatcherGroup
     */
    public function getUrlMatcherGroup()
    {
        return $this->urlMatcherGroup;
    }

    /**
     * @param UrlMatcherGroup $urlMatcherGroup
     */
    public function setUrlMatcherGroup($urlMatcherGroup)
    {
        $this->urlMatcherGroup = $urlMatcherGroup;
    }


}
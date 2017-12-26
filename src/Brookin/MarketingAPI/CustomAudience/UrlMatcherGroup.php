<?php


namespace Brookin\MarketingAPI\CustomAudience;


class UrlMatcherGroup
{
    /**
     * @var UrlMatcher
     */
    protected $urlMatcher;

    /**
     * @return UrlMatcher
     */
    public function getUrlMatcher()
    {
        return $this->urlMatcher;
    }

    /**
     * @param UrlMatcher $urlMatcher
     */
    public function setUrlMatcher($urlMatcher)
    {
        $this->urlMatcher = $urlMatcher;
    }


}
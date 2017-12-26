<?php


namespace Brookin\MarketingAPI\CustomAudience;


class ParamMatcherGroup
{
    /**
     * @var ParamMatcher
     */
    protected $paramMatcher;

    /**
     * @return ParamMatcher
     */
    public function getParamMatcher()
    {
        return $this->paramMatcher;
    }

    /**
     * @param ParamMatcher $paramMatcher
     */
    public function setParamMatcher($paramMatcher)
    {
        $this->paramMatcher = $paramMatcher;
    }


}
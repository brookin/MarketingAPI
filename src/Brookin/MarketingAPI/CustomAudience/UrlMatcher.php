<?php


namespace Brookin\MarketingAPI\CustomAudience;


class UrlMatcher
{
    /**
     * @var string
     */
    protected $paramValue;

    /**
     * @var string
     */
    protected $operator;

    /**
     * @return string
     */
    public function getParamValue()
    {
        return $this->paramValue;
    }

    /**
     * @param string $paramValue
     */
    public function setParamValue($paramValue)
    {
        $this->paramValue = $paramValue;
    }

    /**
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @param string $operator
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }


}
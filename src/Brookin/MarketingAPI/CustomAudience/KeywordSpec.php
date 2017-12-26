<?php


namespace Brookin\MarketingAPI\CustomAudience;


class KeywordSpec
{
    /**
     * @var string[]
     */
    protected $includeKeyword;

    /**
     * @var string[]
     */
    protected $excludeKeyword;

    /**
     * @return \string[]
     */
    public function getIncludeKeyword()
    {
        return $this->includeKeyword;
    }

    /**
     * @param \string[] $includeKeyword
     */
    public function setIncludeKeyword($includeKeyword)
    {
        $this->includeKeyword = $includeKeyword;
    }

    /**
     * @return \string[]
     */
    public function getExcludeKeyword()
    {
        return $this->excludeKeyword;
    }

    /**
     * @param \string[] $excludeKeyword
     */
    public function setExcludeKeyword($excludeKeyword)
    {
        $this->excludeKeyword = $excludeKeyword;
    }


}
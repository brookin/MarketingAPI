<?php


namespace Brookin\MarketingAPI\CustomAudience;


class CombineSpec
{
    /**
     * @var IncludeModel[]
     */
    protected $include;

    /**
     * @var IncludeModel[]
     */
    protected $exclude;

    /**
     * @return IncludeModel[]
     */
    public function getInclude()
    {
        return $this->include;
    }

    /**
     * @param IncludeModel[] $include
     */
    public function setInclude($include)
    {
        $this->include = $include;
    }

    /**
     * @return IncludeModel[]
     */
    public function getExclude()
    {
        return $this->exclude;
    }

    /**
     * @param IncludeModel[] $exclude
     */
    public function setExclude($exclude)
    {
        $this->exclude = $exclude;
    }


}
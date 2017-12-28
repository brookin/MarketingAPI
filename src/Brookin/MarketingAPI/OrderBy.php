<?php


namespace Brookin\MarketingAPI;


class OrderBy
{
    /**
     * @var string
     */
    protected $sortField;

    /**
     * @var string
     */
    protected $sortType;

    /**
     * @return string
     */
    public function getSortField()
    {
        return $this->sortField;
    }

    /**
     * @param string $sortField
     */
    public function setSortField($sortField)
    {
        $this->sortField = $sortField;
    }

    /**
     * @return string
     */
    public function getSortType()
    {
        return $this->sortType;
    }

    /**
     * @param string $sortType
     */
    public function setSortType($sortType)
    {
        $this->sortType = $sortType;
    }


}
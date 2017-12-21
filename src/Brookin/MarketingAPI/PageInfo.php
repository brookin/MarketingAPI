<?php


namespace Brookin\MarketingAPI;


class PageInfo
{
    /**
     * @var integer
     */
    protected $page;

    /**
     * @var integer
     */
    protected $pageSize;

    /**
     * @var integer
     */
    protected $totalNumber;

    /**
     * @var integer
     */
    protected $totalPage;


    /**
     * @return integer
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param integer
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    /**
     * @return integer
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param integer
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return integer
     */
    public function getTotalNumber()
    {
        return $this->totalNumber;
    }

    /**
     * @param integer
     */
    public function setTotalNumber($totalNumber)
    {
        $this->totalNumber = $totalNumber;
    }

    /**
     * @return integer
     */
    public function getTotalPage()
    {
        return $this->totalPage;
    }

    /**
     * @param integer
     */
    public function setTotalPage($totalPage)
    {
        $this->totalPage = $totalPage;
    }
}
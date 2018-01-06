<?php


namespace Brookin\MarketingAPI\Image;


use Brookin\MarketingAPI\GetRequest;

class ImageGetRequest extends GetRequest
{
    /**
     * @var int
     */
    protected $accountId;

    /**
     * @var string
     */
    protected $imageId;


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
    public function getImageId()
    {
        return $this->imageId;
    }

    /**
     * @param string $imageId
     */
    public function setImageId($imageId)
    {
        $this->imageId = $imageId;
    }

}
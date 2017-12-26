<?php


namespace Brookin\MarketingAPI\Image;


class ImageModel
{
    /**
     * @var string
     */
    protected $imageId;

    /**
     * @var integer
     */
    protected $width;

    /**
     * @var integer
     */
    protected $height;

    /**
     * @var integer
     */
    protected $fileSize;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $signature;

    /**
     * @var string
     */
    protected $previewUrl;


    /**
     * @return string
     */
    public function getImageId()
    {
        return $this->imageId;
    }

    /**
     * @param string
     */
    public function setImageId($imageId)
    {
        $this->imageId = $imageId;
    }

    /**
     * @return integer
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param integer
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param integer
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return integer
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * @param integer
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * @param string
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
    }

    /**
     * @return string
     */
    public function getPreviewUrl()
    {
        return $this->previewUrl;
    }

    /**
     * @param string
     */
    public function setPreviewUrl($previewUrl)
    {
        $this->previewUrl = $previewUrl;
    }

}
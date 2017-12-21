<?php


namespace Brookin\MarketingAPI;


class UploadFileStruct
{
    /**
     * @var string
     */
    protected $filePath;

    /**
     * @return string
     */
    public function getFilePath()
    {
        return $this->filePath;
    }

    /**
     * @param string $filePath
     */
    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;
    }

}
<?php
/**
 * Created by PhpStorm.
 * Date: 12/7/17
 * Time: 3:20 PM
 */

namespace Brookin\MarketingAPI\Image;


use Brookin\MarketingAPI\Request;
use Brookin\MarketingAPI\UploadFileStruct;
use GuzzleHttp\RequestOptions;

class ImageAddRequest extends Request
{

    /**
     * @var int
     */
    public $accountId;

    /**
     * @var UploadFileStruct
     */
    public $file;

    /**
     * @var string
     */
    public $signature;

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
     * @return UploadFileStruct
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param UploadFileStruct $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * @param string $signature
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
    }


    public function getGuzzleRequestEnctype()
    {
        return RequestOptions::MULTIPART;
    }
}
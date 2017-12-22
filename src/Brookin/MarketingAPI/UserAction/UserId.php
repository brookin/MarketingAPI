<?php


namespace Brookin\MarketingAPI\UserAction;


class UserId
{
    /**
     * @var string
     */
    protected $hashImei;

    /**
     * @var string
     */
    protected $hashIdfa;

    /**
     * @var string
     */
    protected $gdtOpenid;

    /**
     * @var string
     */
    protected $hashPhone;

    /**
     * @return string
     */
    public function getHashImei()
    {
        return $this->hashImei;
    }

    /**
     * @param string $hashImei
     */
    public function setHashImei($hashImei)
    {
        $this->hashImei = $hashImei;
    }

    /**
     * @return string
     */
    public function getHashIdfa()
    {
        return $this->hashIdfa;
    }

    /**
     * @param string $hashIdfa
     */
    public function setHashIdfa($hashIdfa)
    {
        $this->hashIdfa = $hashIdfa;
    }

    /**
     * @return string
     */
    public function getGdtOpenid()
    {
        return $this->gdtOpenid;
    }

    /**
     * @param string $gdtOpenid
     */
    public function setGdtOpenid($gdtOpenid)
    {
        $this->gdtOpenid = $gdtOpenid;
    }

    /**
     * @return string
     */
    public function getHashPhone()
    {
        return $this->hashPhone;
    }

    /**
     * @param string $hashPhone
     */
    public function setHashPhone($hashPhone)
    {
        $this->hashPhone = $hashPhone;
    }


}
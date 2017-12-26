<?php
/**
 * Created by PhpStorm.
 * Date: 11/28/17
 * Time: 11:51 PM
 */

namespace Brookin\MarketingAPI\Advertiser;


class AdvertiserUpdateRequest
{

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var int
     */
    public $dailyBudget;

    /**
     * @var string
     */
    public $corporationName;

    /**
     * @var string
     */
    public $certificationImageId;

    /**
     * @var string
     */
    public $website;

    /**
     * @var string
     */
    protected $icpImageId;

    /**
     * @var IndividualQualification
     */
    protected $individualQualification;

    /**
     * @var string[]
     */
    public $industryQualificationImageIdList;

    /**
     * @var int
     */
    public $systemIndustryId;

    /**
     * @var string
     */
    protected $customizedIndustry;

    /**
     * @var string
     */
    protected $adQualificationImageIdList;

    /**
     * @var string
     */
    protected $corporateImageName;

    /**
     * @var string
     */
    protected $contactPersonTelephone;

    /**
     * @var string
     */
    protected $contactPersonMobile;

    /**
     * @var string
     */
    protected $certificationNumber;

    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    /**
     * @return int
     */
    public function getDailyBudget()
    {
        return $this->dailyBudget;
    }

    /**
     * @param int $dailyBudget
     */
    public function setDailyBudget($dailyBudget)
    {
        $this->dailyBudget = $dailyBudget;
    }

    /**
     * @return string
     */
    public function getCorporationName()
    {
        return $this->corporationName;
    }

    /**
     * @param string $corporationName
     */
    public function setCorporationName($corporationName)
    {
        $this->corporationName = $corporationName;
    }

    /**
     * @return string
     */
    public function getCertificationImageId()
    {
        return $this->certificationImageId;
    }

    /**
     * @param string $certificationImageId
     */
    public function setCertificationImageId($certificationImageId)
    {
        $this->certificationImageId = $certificationImageId;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param string $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @return string
     */
    public function getIcpImageId()
    {
        return $this->icpImageId;
    }

    /**
     * @param string $icpImageId
     */
    public function setIcpImageId($icpImageId)
    {
        $this->icpImageId = $icpImageId;
    }

    /**
     * @return IndividualQualification
     */
    public function getIndividualQualification()
    {
        return $this->individualQualification;
    }

    /**
     * @param IndividualQualification $individualQualification
     */
    public function setIndividualQualification($individualQualification)
    {
        $this->individualQualification = $individualQualification;
    }

    /**
     * @return \string[]
     */
    public function getIndustryQualificationImageIdList()
    {
        return $this->industryQualificationImageIdList;
    }

    /**
     * @param \string[] $industryQualificationImageIdList
     */
    public function setIndustryQualificationImageIdList($industryQualificationImageIdList)
    {
        $this->industryQualificationImageIdList = $industryQualificationImageIdList;
    }

    /**
     * @return int
     */
    public function getSystemIndustryId()
    {
        return $this->systemIndustryId;
    }

    /**
     * @param int $systemIndustryId
     */
    public function setSystemIndustryId($systemIndustryId)
    {
        $this->systemIndustryId = $systemIndustryId;
    }

    /**
     * @return string
     */
    public function getCustomizedIndustry()
    {
        return $this->customizedIndustry;
    }

    /**
     * @param string $customizedIndustry
     */
    public function setCustomizedIndustry($customizedIndustry)
    {
        $this->customizedIndustry = $customizedIndustry;
    }

    /**
     * @return string
     */
    public function getAdQualificationImageIdList()
    {
        return $this->adQualificationImageIdList;
    }

    /**
     * @param string $adQualificationImageIdList
     */
    public function setAdQualificationImageIdList($adQualificationImageIdList)
    {
        $this->adQualificationImageIdList = $adQualificationImageIdList;
    }

    /**
     * @return string
     */
    public function getCorporateImageName()
    {
        return $this->corporateImageName;
    }

    /**
     * @param string $corporateImageName
     */
    public function setCorporateImageName($corporateImageName)
    {
        $this->corporateImageName = $corporateImageName;
    }

    /**
     * @return string
     */
    public function getContactPersonTelephone()
    {
        return $this->contactPersonTelephone;
    }

    /**
     * @param string $contactPersonTelephone
     */
    public function setContactPersonTelephone($contactPersonTelephone)
    {
        $this->contactPersonTelephone = $contactPersonTelephone;
    }

    /**
     * @return string
     */
    public function getContactPersonMobile()
    {
        return $this->contactPersonMobile;
    }

    /**
     * @param string $contactPersonMobile
     */
    public function setContactPersonMobile($contactPersonMobile)
    {
        $this->contactPersonMobile = $contactPersonMobile;
    }

    /**
     * @return string
     */
    public function getCertificationNumber()
    {
        return $this->certificationNumber;
    }

    /**
     * @param string $certificationNumber
     */
    public function setCertificationNumber($certificationNumber)
    {
        $this->certificationNumber = $certificationNumber;
    }


}
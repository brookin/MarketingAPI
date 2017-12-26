<?php


namespace Brookin\MarketingAPI\Advertiser;


class Advertiser
{
    /**
     * @var string
     */
    protected $accountId;

    /**
     * @var integer
     */
    protected $dailyBudget;

    /**
     * @var string
     */
    protected $systemStatus;

    /**
     * @var string
     */
    protected $rejectMessage;

    /**
     * @var string
     */
    protected $corporationName;

    /**
     * @var string
     */
    protected $corporationLicence;

    /**
     * @var string
     */
    protected $certificationImageId;

    /**
     * @var string
     */
    protected $certificationImage;

    /**
     * @var string
     */
    protected $identityNumber;

    /**
     * @var IndividualQualification
     */
    protected $individualQualification;

    /**
     * @var string
     */
    protected $corporateImageName;

    /**
     * @var string
     */
    protected $corporateImageLogo;

    /**
     * @var integer
     */
    protected $systemIndustryId;

    /**
     * @var string
     */
    protected $website;

    /**
     * @var string
     */
    protected $icpNumber;

    /**
     * @var string
     */
    protected $icpImageId;

    /**
     * @var string
     */
    protected $icpImage;

    /**
     * @var string[]
     */
    protected $industryQualificationImageIdList;

    /**
     * @var string[]
     */
    protected $industryQualificationImage;

    /**
     * @var string[]
     */
    protected $adQualificationImageIdList;

    /**
     * @var string
     */
    protected $contactPerson;

    /**
     * @var string
     */
    protected $contactPersonEmail;

    /**
     * @var string
     */
    protected $contactPersonTelephone;

    /**
     * @var string
     */
    protected $contactPersonMobile;


    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param string
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    /**
     * @return integer
     */
    public function getDailyBudget()
    {
        return $this->dailyBudget;
    }

    /**
     * @param integer
     */
    public function setDailyBudget($dailyBudget)
    {
        $this->dailyBudget = $dailyBudget;
    }

    /**
     * @return string
     */
    public function getSystemStatus()
    {
        return $this->systemStatus;
    }

    /**
     * @param string
     */
    public function setSystemStatus($systemStatus)
    {
        $this->systemStatus = $systemStatus;
    }

    /**
     * @return string
     */
    public function getRejectMessage()
    {
        return $this->rejectMessage;
    }

    /**
     * @param string
     */
    public function setRejectMessage($rejectMessage)
    {
        $this->rejectMessage = $rejectMessage;
    }

    /**
     * @return string
     */
    public function getCorporationName()
    {
        return $this->corporationName;
    }

    /**
     * @param string
     */
    public function setCorporationName($corporationName)
    {
        $this->corporationName = $corporationName;
    }

    /**
     * @return string
     */
    public function getCorporationLicence()
    {
        return $this->corporationLicence;
    }

    /**
     * @param string
     */
    public function setCorporationLicence($corporationLicence)
    {
        $this->corporationLicence = $corporationLicence;
    }

    /**
     * @return string
     */
    public function getCertificationImageId()
    {
        return $this->certificationImageId;
    }

    /**
     * @param string
     */
    public function setCertificationImageId($certificationImageId)
    {
        $this->certificationImageId = $certificationImageId;
    }

    /**
     * @return string
     */
    public function getCertificationImage()
    {
        return $this->certificationImage;
    }

    /**
     * @param string
     */
    public function setCertificationImage($certificationImage)
    {
        $this->certificationImage = $certificationImage;
    }

    /**
     * @return string
     */
    public function getIdentityNumber()
    {
        return $this->identityNumber;
    }

    /**
     * @param string
     */
    public function setIdentityNumber($identityNumber)
    {
        $this->identityNumber = $identityNumber;
    }

    /**
     * @return IndividualQualification
     */
    public function getIndividualQualification()
    {
        return $this->individualQualification;
    }

    /**
     * @param IndividualQualification
     */
    public function setIndividualQualification($individualQualification)
    {
        $this->individualQualification = $individualQualification;
    }

    /**
     * @return string
     */
    public function getCorporateImageName()
    {
        return $this->corporateImageName;
    }

    /**
     * @param string
     */
    public function setCorporateImageName($corporateImageName)
    {
        $this->corporateImageName = $corporateImageName;
    }

    /**
     * @return string
     */
    public function getCorporateImageLogo()
    {
        return $this->corporateImageLogo;
    }

    /**
     * @param string
     */
    public function setCorporateImageLogo($corporateImageLogo)
    {
        $this->corporateImageLogo = $corporateImageLogo;
    }

    /**
     * @return integer
     */
    public function getSystemIndustryId()
    {
        return $this->systemIndustryId;
    }

    /**
     * @param integer
     */
    public function setSystemIndustryId($systemIndustryId)
    {
        $this->systemIndustryId = $systemIndustryId;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param string
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @return string
     */
    public function getIcpNumber()
    {
        return $this->icpNumber;
    }

    /**
     * @param string
     */
    public function setIcpNumber($icpNumber)
    {
        $this->icpNumber = $icpNumber;
    }

    /**
     * @return string
     */
    public function getIcpImageId()
    {
        return $this->icpImageId;
    }

    /**
     * @param string
     */
    public function setIcpImageId($icpImageId)
    {
        $this->icpImageId = $icpImageId;
    }

    /**
     * @return string
     */
    public function getIcpImage()
    {
        return $this->icpImage;
    }

    /**
     * @param string
     */
    public function setIcpImage($icpImage)
    {
        $this->icpImage = $icpImage;
    }

    /**
     * @return string[]
     */
    public function getIndustryQualificationImageIdList()
    {
        return $this->industryQualificationImageIdList;
    }

    /**
     * @param string[]
     */
    public function setIndustryQualificationImageIdList($industryQualificationImageIdList)
    {
        $this->industryQualificationImageIdList = $industryQualificationImageIdList;
    }

    /**
     * @return string[]
     */
    public function getIndustryQualificationImage()
    {
        return $this->industryQualificationImage;
    }

    /**
     * @param string[]
     */
    public function setIndustryQualificationImage($industryQualificationImage)
    {
        $this->industryQualificationImage = $industryQualificationImage;
    }

    /**
     * @return string[]
     */
    public function getAdQualificationImageIdList()
    {
        return $this->adQualificationImageIdList;
    }

    /**
     * @param string[]
     */
    public function setAdQualificationImageIdList($adQualificationImageIdList)
    {
        $this->adQualificationImageIdList = $adQualificationImageIdList;
    }

    /**
     * @return string
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * @param string
     */
    public function setContactPerson($contactPerson)
    {
        $this->contactPerson = $contactPerson;
    }

    /**
     * @return string
     */
    public function getContactPersonEmail()
    {
        return $this->contactPersonEmail;
    }

    /**
     * @param string
     */
    public function setContactPersonEmail($contactPersonEmail)
    {
        $this->contactPersonEmail = $contactPersonEmail;
    }

    /**
     * @return string
     */
    public function getContactPersonTelephone()
    {
        return $this->contactPersonTelephone;
    }

    /**
     * @param string
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
     * @param string
     */
    public function setContactPersonMobile($contactPersonMobile)
    {
        $this->contactPersonMobile = $contactPersonMobile;
    }
}
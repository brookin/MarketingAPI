<?php


namespace Brookin\MarketingAPI\CustomAudience;


class AudienceSpec
{
    /**
     * @var LookalikeSpec
     */
    protected $lookalikeSpec;

    /**
     * @var UserActionSpec
     */
    protected $userActionSpec;

    /**
     * @var LbsSpec
     */
    protected $lbsSpec;

    /**
     * @var KeywordSpec
     */
    protected $keywordSpec;

    /**
     * @var AdRuleSpec
     */
    protected $adRuleSpec;

    /**
     * @var CombineSpec
     */
    protected $combineSpec;

    /**
     * @return LookalikeSpec
     */
    public function getLookalikeSpec()
    {
        return $this->lookalikeSpec;
    }

    /**
     * @param LookalikeSpec $lookalikeSpec
     */
    public function setLookalikeSpec($lookalikeSpec)
    {
        $this->lookalikeSpec = $lookalikeSpec;
    }

    /**
     * @return UserActionSpec
     */
    public function getUserActionSpec()
    {
        return $this->userActionSpec;
    }

    /**
     * @param UserActionSpec $userActionSpec
     */
    public function setUserActionSpec($userActionSpec)
    {
        $this->userActionSpec = $userActionSpec;
    }

    /**
     * @return LbsSpec
     */
    public function getLbsSpec()
    {
        return $this->lbsSpec;
    }

    /**
     * @param LbsSpec $lbsSpec
     */
    public function setLbsSpec($lbsSpec)
    {
        $this->lbsSpec = $lbsSpec;
    }

    /**
     * @return KeywordSpec
     */
    public function getKeywordSpec()
    {
        return $this->keywordSpec;
    }

    /**
     * @param KeywordSpec $keywordSpec
     */
    public function setKeywordSpec($keywordSpec)
    {
        $this->keywordSpec = $keywordSpec;
    }

    /**
     * @return AdRuleSpec
     */
    public function getAdRuleSpec()
    {
        return $this->adRuleSpec;
    }

    /**
     * @param AdRuleSpec $adRuleSpec
     */
    public function setAdRuleSpec($adRuleSpec)
    {
        $this->adRuleSpec = $adRuleSpec;
    }

    /**
     * @return CombineSpec
     */
    public function getCombineSpec()
    {
        return $this->combineSpec;
    }

    /**
     * @param CombineSpec $combineSpec
     */
    public function setCombineSpec($combineSpec)
    {
        $this->combineSpec = $combineSpec;
    }


}
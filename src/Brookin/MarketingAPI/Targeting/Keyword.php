<?php


namespace Brookin\MarketingAPI\Targeting;


class Keyword
{
    /**
     * @var string[]
     */
    protected $words;

    /**
     * @return \string[]
     */
    public function getWords()
    {
        return $this->words;
    }

    /**
     * @param \string[] $words
     */
    public function setWords($words)
    {
        $this->words = $words;
    }


}
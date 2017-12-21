<?php


namespace Brookin\MarketingAPI;


use Rafrsr\LibArray2Object\Naming\NamingStrategyInterface;

class ParamNameTransform implements NamingStrategyInterface
{

    /**
     * Transform the origin name to use different version on target.
     *
     * @param string $name current name
     *
     * @return string
     */
    public function transformName($name)
    {
        return Request::uncamelize($name);
    }
}
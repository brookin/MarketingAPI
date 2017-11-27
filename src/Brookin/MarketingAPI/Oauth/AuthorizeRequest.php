<?php
/**
 * Created by PhpStorm.
 * User: gavin
 * Date: 11/26/17
 * Time: 7:26 PM
 */

namespace Brookin\MarketingAPI\Oauth;


use Brookin\MarketingAPI\Request;

class AuthorizeRequest extends Request
{
    /**
     * @var int
     */
    public $clientId;

    /**
     * @var string
     */
    public $redirectUri;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $scope;

    /**
     * @return int
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param int $clientId
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
    }

    /**
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->redirectUri;
    }

    /**
     * @param string $redirectUri
     */
    public function setRedirectUri($redirectUri)
    {
        $this->redirectUri = $redirectUri;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param string $scope
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
    }

}
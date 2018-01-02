<?php


namespace Brookin\MarketingAPI;


use Psr\Http\Message\ResponseInterface;

class RequestContext
{
    /**
     * @var string
     */
    protected $url;

    /**
     * @var string
     */
    protected $method;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @var Response
     */
    protected $response;

    /**
     * @var ResponseInterface
     */
    protected $responseRaw;

    public function __construct($url, $method, Request $request, Response $response, ResponseInterface $responseRaw = null)
    {
        $this->url = $url;
        $this->method = $method;
        $this->request = $request;
        $this->response = $response;
        $this->responseRaw = $responseRaw;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param Request $request
     */
    public function setRequest($request)
    {
        $this->request = $request;
    }

    /**
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param Response $response
     */
    public function setResponse($response)
    {
        $this->response = $response;
    }

    /**
     * @return ResponseInterface
     */
    public function getResponseRaw()
    {
        return $this->responseRaw;
    }

    /**
     * @param ResponseInterface $responseRaw
     */
    public function setResponseRaw($responseRaw)
    {
        $this->responseRaw = $responseRaw;
    }


}
<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 10:03 AM
 */

namespace Brookin\MarketingAPI;


class RestClient extends Client
{

    public function getPath($method) {
        $this->path = sprintf('/%ss/%s', $this->getModuleName(), $this->getActionName($method));
        return $this->path;
    }

    public function getRequestPath(Request $request)
    {
        $this->path = sprintf('/%ss/%s', $this->getModuleName(), $request->getApiRequestMethod());
        return $this->path;
    }
}
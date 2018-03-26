<?php
/**
 * Created by PhpStorm.
 * Date: 12/8/17
 * Time: 10:26 AM
 */

namespace Brookin\MarketingAPI\Targeting;

use Brookin\MarketingAPI\RestClient;

class TargetingService extends RestClient
{
    public function add(TargetingAddRequest $request, TargetingAddResponse $response) {
        $this->send(self::POST, $this->getPath(__METHOD__), $request, $response);
    }

    public function update(TargetingUpdateRequest $request, TargetingUpdateResponse $response) {
        $this->send(self::POST, $this->getPath(__METHOD__), $request, $response);
    }

    public function get(TargetingGetRequest $request, TargetingGetResponse $response) {
        $this->send(self::GET, $this->getPath(__METHOD__), $request, $response);
    }

    public function getTags(TargetingTagsGetRequest $request, TargetingTagGetResponse $response) {
        $this->send(self::GET, $this->getPath(__METHOD__), $request, $response);
    }

    public function delete(TargetingDeleteRequest $request, TargetingDeleteResponse $response)
    {
        $this->doPost($request, $response);
    }
}
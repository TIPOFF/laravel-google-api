<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_MediaItemDataRef extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $resourceName;

    public function setResourceName($resourceName)
    {
        $this->resourceName = $resourceName;
    }

    public function getResourceName()
    {
        return $this->resourceName;
    }
}

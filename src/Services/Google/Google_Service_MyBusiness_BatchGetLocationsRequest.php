<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_BatchGetLocationsRequest extends Google_Collection
{
    protected $collection_key = 'locationNames';
    protected $internal_gapi_mappings = [
    ];
    public $locationNames;

    public function setLocationNames($locationNames)
    {
        $this->locationNames = $locationNames;
    }

    public function getLocationNames()
    {
        return $this->locationNames;
    }
}

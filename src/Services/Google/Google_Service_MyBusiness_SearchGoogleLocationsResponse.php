<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_SearchGoogleLocationsResponse extends Google_Collection
{
    protected $collection_key = 'googleLocations';
    protected $internal_gapi_mappings = [
    ];
    protected $googleLocationsType = 'Google_Service_MyBusiness_GoogleLocation';
    protected $googleLocationsDataType = 'array';

    public function setGoogleLocations($googleLocations)
    {
        $this->googleLocations = $googleLocations;
    }

    public function getGoogleLocations()
    {
        return $this->googleLocations;
    }
}

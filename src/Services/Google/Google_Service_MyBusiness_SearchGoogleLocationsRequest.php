<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_SearchGoogleLocationsRequest extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    protected $locationType = 'Google_Service_MyBusiness_Location';
    protected $locationDataType = '';
    public $query;
    public $resultCount;

    public function setLocation(Google_Service_MyBusiness_Location $location)
    {
        $this->location = $location;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setQuery($query)
    {
        $this->query = $query;
    }

    public function getQuery()
    {
        return $this->query;
    }

    public function setResultCount($resultCount)
    {
        $this->resultCount = $resultCount;
    }

    public function getResultCount()
    {
        return $this->resultCount;
    }
}

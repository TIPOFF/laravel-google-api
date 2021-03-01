<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_ListRecommendedGoogleLocationsResponse extends Google_Collection
{
    protected $collection_key = 'googleLocations';
    protected $internal_gapi_mappings = [
    ];
    protected $googleLocationsType = 'Google_Service_MyBusiness_GoogleLocation';
    protected $googleLocationsDataType = 'array';
    public $nextPageToken;
    public $totalSize;

    public function setGoogleLocations($googleLocations)
    {
        $this->googleLocations = $googleLocations;
    }

    public function getGoogleLocations()
    {
        return $this->googleLocations;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setTotalSize($totalSize)
    {
        $this->totalSize = $totalSize;
    }

    public function getTotalSize()
    {
        return $this->totalSize;
    }
}

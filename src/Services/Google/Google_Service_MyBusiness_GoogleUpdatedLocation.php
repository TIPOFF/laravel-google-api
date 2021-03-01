<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_GoogleUpdatedLocation extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $diffMask;
    protected $locationType = 'Google_Service_MyBusiness_Location';
    protected $locationDataType = '';

    public function setDiffMask($diffMask)
    {
        $this->diffMask = $diffMask;
    }

    public function getDiffMask()
    {
        return $this->diffMask;
    }

    public function setLocation(Google_Service_MyBusiness_Location $location)
    {
        $this->location = $location;
    }

    public function getLocation()
    {
        return $this->location;
    }
}

<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_TargetLocation extends Google_Model
{
    protected $internal_gapi_mappings = [];
    public $locationAddress;
    public $locationName;

    public function setLocationAddress($locationAddress)
    {
        $this->locationAddress = $locationAddress;
    }

    public function getLocationAddress()
    {
        return $this->locationAddress;
    }

    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;
    }

    public function getLocationName()
    {
        return $this->locationName;
    }
}

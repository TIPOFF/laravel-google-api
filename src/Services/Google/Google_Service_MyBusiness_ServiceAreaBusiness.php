<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_ServiceAreaBusiness extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $businessType;
    protected $placesType = 'Google_Service_MyBusiness_Places';
    protected $placesDataType = '';
    protected $radiusType = 'Google_Service_MyBusiness_PointRadius';
    protected $radiusDataType = '';

    public function setBusinessType($businessType)
    {
        $this->businessType = $businessType;
    }

    public function getBusinessType()
    {
        return $this->businessType;
    }

    public function setPlaces(Google_Service_MyBusiness_Places $places)
    {
        $this->places = $places;
    }

    public function getPlaces()
    {
        return $this->places;
    }

    public function setRadius(Google_Service_MyBusiness_PointRadius $radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }
}

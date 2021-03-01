<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_PointRadius extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    protected $latlngType = 'Google_Service_MyBusiness_LatLng';
    protected $latlngDataType = '';
    public $radiusKm;

    public function setLatlng(Google_Service_MyBusiness_LatLng $latlng)
    {
        $this->latlng = $latlng;
    }

    public function getLatlng()
    {
        return $this->latlng;
    }

    public function setRadiusKm($radiusKm)
    {
        $this->radiusKm = $radiusKm;
    }

    public function getRadiusKm()
    {
        return $this->radiusKm;
    }
}

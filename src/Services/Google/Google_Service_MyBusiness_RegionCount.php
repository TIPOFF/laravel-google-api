<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_RegionCount extends Google_Model
{
    protected $internal_gapi_mappings = [];
    public $count;
    public $label;
    protected $latlngType = 'Google_Service_MyBusiness_LatLng';
    protected $latlngDataType = '';

    public function setCount($count)
    {
        $this->count = $count;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setLabel($label)
    {
        $this->label = $label;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function setLatlng(Google_Service_MyBusiness_LatLng $latlng)
    {
        $this->latlng = $latlng;
    }

    public function getLatlng()
    {
        return $this->latlng;
    }
}

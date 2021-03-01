<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_PlaceInfo extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $name;
    public $placeId;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPlaceId($placeId)
    {
        $this->placeId = $placeId;
    }

    public function getPlaceId()
    {
        return $this->placeId;
    }
}

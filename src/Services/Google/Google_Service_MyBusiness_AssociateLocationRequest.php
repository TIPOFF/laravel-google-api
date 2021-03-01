<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_AssociateLocationRequest extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $placeId;

    public function setPlaceId($placeId)
    {
        $this->placeId = $placeId;
    }

    public function getPlaceId()
    {
        return $this->placeId;
    }
}

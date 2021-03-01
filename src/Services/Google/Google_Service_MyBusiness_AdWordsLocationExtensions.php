<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_AdWordsLocationExtensions extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $adPhone;

    public function setAdPhone($adPhone)
    {
        $this->adPhone = $adPhone;
    }

    public function getAdPhone()
    {
        return $this->adPhone;
    }
}

<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_ChainName extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $displayName;
    public $languageCode;

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
    }

    public function getLanguageCode()
    {
        return $this->languageCode;
    }
}

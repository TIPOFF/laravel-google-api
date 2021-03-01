<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_DrivingDirectionMetricsRequest extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $languageCode;
    public $numDays;

    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
    }

    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    public function setNumDays($numDays)
    {
        $this->numDays = $numDays;
    }

    public function getNumDays()
    {
        return $this->numDays;
    }
}

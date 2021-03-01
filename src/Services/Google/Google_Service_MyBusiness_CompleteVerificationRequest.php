<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_CompleteVerificationRequest extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $pin;

    public function setPin($pin)
    {
        $this->pin = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }
}

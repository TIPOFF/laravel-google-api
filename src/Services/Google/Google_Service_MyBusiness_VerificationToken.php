<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_VerificationToken extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $tokenString;

    public function setTokenString($tokenString)
    {
        $this->tokenString = $tokenString;
    }

    public function getTokenString()
    {
        return $this->tokenString;
    }
}

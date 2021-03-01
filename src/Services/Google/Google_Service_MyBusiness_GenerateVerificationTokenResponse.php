<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_GenerateVerificationTokenResponse extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    protected $tokenType = 'Google_Service_MyBusiness_VerificationToken';
    protected $tokenDataType = '';

    public function setToken(Google_Service_MyBusiness_VerificationToken $token)
    {
        $this->token = $token;
    }

    public function getToken()
    {
        return $this->token;
    }
}

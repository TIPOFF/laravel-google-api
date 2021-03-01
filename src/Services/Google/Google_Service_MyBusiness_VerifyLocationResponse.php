<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_VerifyLocationResponse extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    protected $verificationType = 'Google_Service_MyBusiness_Verification';
    protected $verificationDataType = '';

    public function setVerification(Google_Service_MyBusiness_Verification $verification)
    {
        $this->verification = $verification;
    }

    public function getVerification()
    {
        return $this->verification;
    }
}

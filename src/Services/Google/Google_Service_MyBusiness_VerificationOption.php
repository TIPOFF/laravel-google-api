<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_VerificationOption extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    protected $addressDataType = 'Google_Service_MyBusiness_AddressVerificationData';
    protected $addressDataDataType = '';
    protected $emailDataType = 'Google_Service_MyBusiness_EmailVerificationData';
    protected $emailDataDataType = '';
    protected $phoneDataType = 'Google_Service_MyBusiness_PhoneVerificationData';
    protected $phoneDataDataType = '';
    public $verificationMethod;

    public function setAddressData(Google_Service_MyBusiness_AddressVerificationData $addressData)
    {
        $this->addressData = $addressData;
    }

    public function getAddressData()
    {
        return $this->addressData;
    }

    public function setEmailData(Google_Service_MyBusiness_EmailVerificationData $emailData)
    {
        $this->emailData = $emailData;
    }

    public function getEmailData()
    {
        return $this->emailData;
    }

    public function setPhoneData(Google_Service_MyBusiness_PhoneVerificationData $phoneData)
    {
        $this->phoneData = $phoneData;
    }

    public function getPhoneData()
    {
        return $this->phoneData;
    }

    public function setVerificationMethod($verificationMethod)
    {
        $this->verificationMethod = $verificationMethod;
    }

    public function getVerificationMethod()
    {
        return $this->verificationMethod;
    }
}

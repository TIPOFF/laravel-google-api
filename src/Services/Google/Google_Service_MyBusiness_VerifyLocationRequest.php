<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_VerifyLocationRequest extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    protected $addressInputType = 'Google_Service_MyBusiness_AddressInput';
    protected $addressInputDataType = '';
    protected $contextType = 'Google_Service_MyBusiness_ServiceBusinessContext';
    protected $contextDataType = '';
    protected $emailInputType = 'Google_Service_MyBusiness_EmailInput';
    protected $emailInputDataType = '';
    public $languageCode;
    public $method;
    protected $phoneInputType = 'Google_Service_MyBusiness_PhoneInput';
    protected $phoneInputDataType = '';
    protected $vettedPartnerInputType = 'Google_Service_MyBusiness_VettedPartnerInput';
    protected $vettedPartnerInputDataType = '';

    public function setAddressInput(Google_Service_MyBusiness_AddressInput $addressInput)
    {
        $this->addressInput = $addressInput;
    }

    public function getAddressInput()
    {
        return $this->addressInput;
    }

    public function setContext(Google_Service_MyBusiness_ServiceBusinessContext $context)
    {
        $this->context = $context;
    }

    public function getContext()
    {
        return $this->context;
    }

    public function setEmailInput(Google_Service_MyBusiness_EmailInput $emailInput)
    {
        $this->emailInput = $emailInput;
    }

    public function getEmailInput()
    {
        return $this->emailInput;
    }

    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
    }

    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    public function setMethod($method)
    {
        $this->method = $method;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function setPhoneInput(Google_Service_MyBusiness_PhoneInput $phoneInput)
    {
        $this->phoneInput = $phoneInput;
    }

    public function getPhoneInput()
    {
        return $this->phoneInput;
    }

    public function setVettedPartnerInput(Google_Service_MyBusiness_VettedPartnerInput $vettedPartnerInput)
    {
        $this->vettedPartnerInput = $vettedPartnerInput;
    }

    public function getVettedPartnerInput()
    {
        return $this->vettedPartnerInput;
    }
}

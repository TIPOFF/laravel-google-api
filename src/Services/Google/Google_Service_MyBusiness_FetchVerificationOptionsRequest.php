<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_FetchVerificationOptionsRequest extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    protected $contextType = 'Google_Service_MyBusiness_ServiceBusinessContext';
    protected $contextDataType = '';
    public $languageCode;

    public function setContext(Google_Service_MyBusiness_ServiceBusinessContext $context)
    {
        $this->context = $context;
    }

    public function getContext()
    {
        return $this->context;
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

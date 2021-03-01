<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_EmailVerificationData extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $domainName;
    public $isUserNameEditable;
    public $userName;

    public function setDomainName($domainName)
    {
        $this->domainName = $domainName;
    }

    public function getDomainName()
    {
        return $this->domainName;
    }

    public function setIsUserNameEditable($isUserNameEditable)
    {
        $this->isUserNameEditable = $isUserNameEditable;
    }

    public function getIsUserNameEditable()
    {
        return $this->isUserNameEditable;
    }

    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    public function getUserName()
    {
        return $this->userName;
    }
}

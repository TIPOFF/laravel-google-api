<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_Attribution extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $profileName;
    public $profilePhotoUrl;
    public $profileUrl;
    public $takedownUrl;

    public function setProfileName($profileName)
    {
        $this->profileName = $profileName;
    }

    public function getProfileName()
    {
        return $this->profileName;
    }

    public function setProfilePhotoUrl($profilePhotoUrl)
    {
        $this->profilePhotoUrl = $profilePhotoUrl;
    }

    public function getProfilePhotoUrl()
    {
        return $this->profilePhotoUrl;
    }

    public function setProfileUrl($profileUrl)
    {
        $this->profileUrl = $profileUrl;
    }

    public function getProfileUrl()
    {
        return $this->profileUrl;
    }

    public function setTakedownUrl($takedownUrl)
    {
        $this->takedownUrl = $takedownUrl;
    }

    public function getTakedownUrl()
    {
        return $this->takedownUrl;
    }
}

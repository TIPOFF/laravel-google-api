<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_Account extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $accountName;
    public $accountNumber;
    public $name;
    protected $organizationInfoType = 'Google_Service_MyBusiness_OrganizationInfo';
    protected $organizationInfoDataType = '';
    public $permissionLevel;
    public $profilePhotoUrl;
    public $role;
    protected $stateType = 'Google_Service_MyBusiness_AccountState';
    protected $stateDataType = '';
    public $type;

    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
    }

    public function getAccountName()
    {
        return $this->accountName;
    }

    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }

    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setOrganizationInfo(Google_Service_MyBusiness_OrganizationInfo $organizationInfo)
    {
        $this->organizationInfo = $organizationInfo;
    }

    public function getOrganizationInfo()
    {
        return $this->organizationInfo;
    }

    public function setPermissionLevel($permissionLevel)
    {
        $this->permissionLevel = $permissionLevel;
    }

    public function getPermissionLevel()
    {
        return $this->permissionLevel;
    }

    public function setProfilePhotoUrl($profilePhotoUrl)
    {
        $this->profilePhotoUrl = $profilePhotoUrl;
    }

    public function getProfilePhotoUrl()
    {
        return $this->profilePhotoUrl;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setState(Google_Service_MyBusiness_AccountState $state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}

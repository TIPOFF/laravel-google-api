<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_Invitation extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $name;
    public $role;
    protected $targetAccountType = 'Google_Service_MyBusiness_Account';
    protected $targetAccountDataType = '';
    protected $targetLocationType = 'Google_Service_MyBusiness_TargetLocation';
    protected $targetLocationDataType = '';

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setTargetAccount(Google_Service_MyBusiness_Account $targetAccount)
    {
        $this->targetAccount = $targetAccount;
    }

    public function getTargetAccount()
    {
        return $this->targetAccount;
    }

    public function setTargetLocation(Google_Service_MyBusiness_TargetLocation $targetLocation)
    {
        $this->targetLocation = $targetLocation;
    }

    public function getTargetLocation()
    {
        return $this->targetLocation;
    }
}

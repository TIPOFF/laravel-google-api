<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_Admin extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $adminName;
    public $name;
    public $pendingInvitation;
    public $role;

    public function setAdminName($adminName)
    {
        $this->adminName = $adminName;
    }

    public function getAdminName()
    {
        return $this->adminName;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPendingInvitation($pendingInvitation)
    {
        $this->pendingInvitation = $pendingInvitation;
    }

    public function getPendingInvitation()
    {
        return $this->pendingInvitation;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getRole()
    {
        return $this->role;
    }
}

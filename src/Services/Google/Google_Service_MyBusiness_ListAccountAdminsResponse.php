<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_ListAccountAdminsResponse extends Google_Collection
{
    protected $collection_key = 'admins';
    protected $internal_gapi_mappings = [
    ];
    protected $adminsType = 'Google_Service_MyBusiness_Admin';
    protected $adminsDataType = 'array';

    public function setAdmins($admins)
    {
        $this->admins = $admins;
    }

    public function getAdmins()
    {
        return $this->admins;
    }
}

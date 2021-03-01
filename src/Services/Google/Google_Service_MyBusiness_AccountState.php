<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_AccountState extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $status;
    public $vettedStatus;

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setVettedStatus($vettedStatus)
    {
        $this->vettedStatus = $vettedStatus;
    }

    public function getVettedStatus()
    {
        return $this->vettedStatus;
    }
}

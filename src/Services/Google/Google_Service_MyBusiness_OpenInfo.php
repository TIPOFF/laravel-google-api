<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_OpenInfo extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $canReopen;
    protected $openingDateType = 'Google_Service_MyBusiness_Date';
    protected $openingDateDataType = '';
    public $status;

    public function setCanReopen($canReopen)
    {
        $this->canReopen = $canReopen;
    }

    public function getCanReopen()
    {
        return $this->canReopen;
    }

    public function setOpeningDate(Google_Service_MyBusiness_Date $openingDate)
    {
        $this->openingDate = $openingDate;
    }

    public function getOpeningDate()
    {
        return $this->openingDate;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }
}

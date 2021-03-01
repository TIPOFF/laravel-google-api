<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_TimePeriod extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $closeDay;
    public $closeTime;
    public $openDay;
    public $openTime;

    public function setCloseDay($closeDay)
    {
        $this->closeDay = $closeDay;
    }

    public function getCloseDay()
    {
        return $this->closeDay;
    }

    public function setCloseTime($closeTime)
    {
        $this->closeTime = $closeTime;
    }

    public function getCloseTime()
    {
        return $this->closeTime;
    }

    public function setOpenDay($openDay)
    {
        $this->openDay = $openDay;
    }

    public function getOpenDay()
    {
        return $this->openDay;
    }

    public function setOpenTime($openTime)
    {
        $this->openTime = $openTime;
    }

    public function getOpenTime()
    {
        return $this->openTime;
    }
}

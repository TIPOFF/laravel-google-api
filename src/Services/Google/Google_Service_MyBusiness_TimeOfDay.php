<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_TimeOfDay extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $hours;
    public $minutes;
    public $nanos;
    public $seconds;

    public function setHours($hours)
    {
        $this->hours = $hours;
    }

    public function getHours()
    {
        return $this->hours;
    }

    public function setMinutes($minutes)
    {
        $this->minutes = $minutes;
    }

    public function getMinutes()
    {
        return $this->minutes;
    }

    public function setNanos($nanos)
    {
        $this->nanos = $nanos;
    }

    public function getNanos()
    {
        return $this->nanos;
    }

    public function setSeconds($seconds)
    {
        $this->seconds = $seconds;
    }

    public function getSeconds()
    {
        return $this->seconds;
    }
}

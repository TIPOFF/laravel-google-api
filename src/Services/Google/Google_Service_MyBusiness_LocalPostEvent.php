<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_LocalPostEvent extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    protected $scheduleType = 'Google_Service_MyBusiness_TimeInterval';
    protected $scheduleDataType = '';
    public $title;

    public function setSchedule(Google_Service_MyBusiness_TimeInterval $schedule)
    {
        $this->schedule = $schedule;
    }

    public function getSchedule()
    {
        return $this->schedule;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}

<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_TimeDimension extends Google_Model
{
    protected $internal_gapi_mappings = [];
    public $dayOfWeek;
    protected $timeOfDayType = 'Google_Service_MyBusiness_TimeOfDay';
    protected $timeOfDayDataType = '';
    protected $timeRangeType = 'Google_Service_MyBusiness_TimeRange';
    protected $timeRangeDataType = '';

    public function setDayOfWeek($dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;
    }

    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    public function setTimeOfDay(Google_Service_MyBusiness_TimeOfDay $timeOfDay)
    {
        $this->timeOfDay = $timeOfDay;
    }

    public function getTimeOfDay()
    {
        return $this->timeOfDay;
    }

    public function setTimeRange(Google_Service_MyBusiness_TimeRange $timeRange)
    {
        $this->timeRange = $timeRange;
    }

    public function getTimeRange()
    {
        return $this->timeRange;
    }
}

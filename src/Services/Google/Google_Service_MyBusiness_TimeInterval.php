<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_TimeInterval extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    protected $endDateType = 'Google_Service_MyBusiness_Date';
    protected $endDateDataType = '';
    protected $endTimeType = 'Google_Service_MyBusiness_TimeOfDay';
    protected $endTimeDataType = '';
    protected $startDateType = 'Google_Service_MyBusiness_Date';
    protected $startDateDataType = '';
    protected $startTimeType = 'Google_Service_MyBusiness_TimeOfDay';
    protected $startTimeDataType = '';

    public function setEndDate(Google_Service_MyBusiness_Date $endDate)
    {
        $this->endDate = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndTime(Google_Service_MyBusiness_TimeOfDay $endTime)
    {
        $this->endTime = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setStartDate(Google_Service_MyBusiness_Date $startDate)
    {
        $this->startDate = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartTime(Google_Service_MyBusiness_TimeOfDay $startTime)
    {
        $this->startTime = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }
}

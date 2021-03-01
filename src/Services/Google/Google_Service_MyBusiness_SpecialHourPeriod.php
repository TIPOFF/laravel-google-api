<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_SpecialHourPeriod extends Google_Model
{
    protected $internal_gapi_mappings = [];
    public $closeTime;
    protected $endDateType = 'Google_Service_MyBusiness_Date';
    protected $endDateDataType = '';
    public $isClosed;
    public $openTime;
    protected $startDateType = 'Google_Service_MyBusiness_Date';
    protected $startDateDataType = '';

    public function setCloseTime($closeTime)
    {
        $this->closeTime = $closeTime;
    }

    public function getCloseTime()
    {
        return $this->closeTime;
    }

    public function setEndDate(Google_Service_MyBusiness_Date $endDate)
    {
        $this->endDate = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setIsClosed($isClosed)
    {
        $this->isClosed = $isClosed;
    }

    public function getIsClosed()
    {
        return $this->isClosed;
    }

    public function setOpenTime($openTime)
    {
        $this->openTime = $openTime;
    }

    public function getOpenTime()
    {
        return $this->openTime;
    }

    public function setStartDate(Google_Service_MyBusiness_Date $startDate)
    {
        $this->startDate = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }
}

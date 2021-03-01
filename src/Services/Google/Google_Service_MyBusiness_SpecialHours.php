<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_SpecialHours extends Google_Collection
{
    protected $collection_key = 'specialHourPeriods';
    protected $internal_gapi_mappings = [
    ];
    protected $specialHourPeriodsType = 'Google_Service_MyBusiness_SpecialHourPeriod';
    protected $specialHourPeriodsDataType = 'array';

    public function setSpecialHourPeriods($specialHourPeriods)
    {
        $this->specialHourPeriods = $specialHourPeriods;
    }

    public function getSpecialHourPeriods()
    {
        return $this->specialHourPeriods;
    }
}

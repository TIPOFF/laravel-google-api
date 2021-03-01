<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_BusinessHours extends Google_Collection
{
    protected $collection_key = 'periods';
    protected $internal_gapi_mappings = [
    ];
    protected $periodsType = 'Google_Service_MyBusiness_TimePeriod';
    protected $periodsDataType = 'array';

    public function setPeriods($periods)
    {
        $this->periods = $periods;
    }

    public function getPeriods()
    {
        return $this->periods;
    }
}

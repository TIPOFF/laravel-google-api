<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_TopDirectionSources extends Google_Collection
{
    protected $collection_key = 'regionCounts';
    protected $internal_gapi_mappings = [];
    public $dayCount;
    protected $regionCountsType = 'Google_Service_MyBusiness_RegionCount';
    protected $regionCountsDataType = 'array';

    public function setDayCount($dayCount)
    {
        $this->dayCount = $dayCount;
    }

    public function getDayCount()
    {
        return $this->dayCount;
    }

    public function setRegionCounts($regionCounts)
    {
        $this->regionCounts = $regionCounts;
    }

    public function getRegionCounts()
    {
        return $this->regionCounts;
    }
}

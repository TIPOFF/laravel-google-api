<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_LocationMetrics extends Google_Collection
{
    protected $collection_key = 'metricValues';
    protected $internal_gapi_mappings = [
    ];
    public $locationName;
    protected $metricValuesType = 'Google_Service_MyBusiness_MetricValue';
    protected $metricValuesDataType = 'array';
    public $timeZone;

    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;
    }

    public function getLocationName()
    {
        return $this->locationName;
    }

    public function setMetricValues($metricValues)
    {
        $this->metricValues = $metricValues;
    }

    public function getMetricValues()
    {
        return $this->metricValues;
    }

    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }

    public function getTimeZone()
    {
        return $this->timeZone;
    }
}

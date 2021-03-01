<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_LocalPostMetrics extends Google_Collection
{
    protected $collection_key = 'metricValues';
    protected $internal_gapi_mappings = [
    ];
    public $localPostName;
    protected $metricValuesType = 'Google_Service_MyBusiness_MetricValue';
    protected $metricValuesDataType = 'array';

    public function setLocalPostName($localPostName)
    {
        $this->localPostName = $localPostName;
    }

    public function getLocalPostName()
    {
        return $this->localPostName;
    }

    public function setMetricValues($metricValues)
    {
        $this->metricValues = $metricValues;
    }

    public function getMetricValues()
    {
        return $this->metricValues;
    }
}

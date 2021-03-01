<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_BasicMetricsRequest extends Google_Collection
{
    protected $collection_key = 'metricRequests';
    protected $internal_gapi_mappings = [
    ];
    protected $metricRequestsType = 'Google_Service_MyBusiness_MetricRequest';
    protected $metricRequestsDataType = 'array';
    protected $timeRangeType = 'Google_Service_MyBusiness_TimeRange';
    protected $timeRangeDataType = '';

    public function setMetricRequests($metricRequests)
    {
        $this->metricRequests = $metricRequests;
    }

    public function getMetricRequests()
    {
        return $this->metricRequests;
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

<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_MetricValue extends Google_Collection
{
    protected $collection_key = 'dimensionalValues';
    protected $internal_gapi_mappings = [
    ];
    protected $dimensionalValuesType = 'Google_Service_MyBusiness_DimensionalMetricValue';
    protected $dimensionalValuesDataType = 'array';
    public $metric;
    protected $totalValueType = 'Google_Service_MyBusiness_DimensionalMetricValue';
    protected $totalValueDataType = '';

    public function setDimensionalValues($dimensionalValues)
    {
        $this->dimensionalValues = $dimensionalValues;
    }

    public function getDimensionalValues()
    {
        return $this->dimensionalValues;
    }

    public function setMetric($metric)
    {
        $this->metric = $metric;
    }

    public function getMetric()
    {
        return $this->metric;
    }

    public function setTotalValue(Google_Service_MyBusiness_DimensionalMetricValue $totalValue)
    {
        $this->totalValue = $totalValue;
    }

    public function getTotalValue()
    {
        return $this->totalValue;
    }
}

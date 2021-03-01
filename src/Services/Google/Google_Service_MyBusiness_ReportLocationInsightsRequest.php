<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_ReportLocationInsightsRequest extends Google_Collection
{
    protected $collection_key = 'locationNames';
    protected $internal_gapi_mappings = [
    ];
    protected $basicRequestType = 'Google_Service_MyBusiness_BasicMetricsRequest';
    protected $basicRequestDataType = '';
    protected $drivingDirectionsRequestType = 'Google_Service_MyBusiness_DrivingDirectionMetricsRequest';
    protected $drivingDirectionsRequestDataType = '';
    public $locationNames;

    public function setBasicRequest(Google_Service_MyBusiness_BasicMetricsRequest $basicRequest)
    {
        $this->basicRequest = $basicRequest;
    }

    public function getBasicRequest()
    {
        return $this->basicRequest;
    }

    public function setDrivingDirectionsRequest(Google_Service_MyBusiness_DrivingDirectionMetricsRequest $drivingDirectionsRequest)
    {
        $this->drivingDirectionsRequest = $drivingDirectionsRequest;
    }

    public function getDrivingDirectionsRequest()
    {
        return $this->drivingDirectionsRequest;
    }

    public function setLocationNames($locationNames)
    {
        $this->locationNames = $locationNames;
    }

    public function getLocationNames()
    {
        return $this->locationNames;
    }
}

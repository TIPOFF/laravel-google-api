<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_ReportLocalPostInsightsRequest extends Google_Collection
{
    protected $collection_key = 'localPostNames';
    protected $internal_gapi_mappings = [
    ];
    protected $basicRequestType = 'Google_Service_MyBusiness_BasicMetricsRequest';
    protected $basicRequestDataType = '';
    public $localPostNames;

    public function setBasicRequest(Google_Service_MyBusiness_BasicMetricsRequest $basicRequest)
    {
        $this->basicRequest = $basicRequest;
    }

    public function getBasicRequest()
    {
        return $this->basicRequest;
    }

    public function setLocalPostNames($localPostNames)
    {
        $this->localPostNames = $localPostNames;
    }

    public function getLocalPostNames()
    {
        return $this->localPostNames;
    }
}

<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_ReportGoogleLocationRequest extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $locationGroupName;
    public $reportReasonBadLocation;
    public $reportReasonBadRecommendation;
    public $reportReasonElaboration;
    public $reportReasonLanguageCode;

    public function setLocationGroupName($locationGroupName)
    {
        $this->locationGroupName = $locationGroupName;
    }

    public function getLocationGroupName()
    {
        return $this->locationGroupName;
    }

    public function setReportReasonBadLocation($reportReasonBadLocation)
    {
        $this->reportReasonBadLocation = $reportReasonBadLocation;
    }

    public function getReportReasonBadLocation()
    {
        return $this->reportReasonBadLocation;
    }

    public function setReportReasonBadRecommendation($reportReasonBadRecommendation)
    {
        $this->reportReasonBadRecommendation = $reportReasonBadRecommendation;
    }

    public function getReportReasonBadRecommendation()
    {
        return $this->reportReasonBadRecommendation;
    }

    public function setReportReasonElaboration($reportReasonElaboration)
    {
        $this->reportReasonElaboration = $reportReasonElaboration;
    }

    public function getReportReasonElaboration()
    {
        return $this->reportReasonElaboration;
    }

    public function setReportReasonLanguageCode($reportReasonLanguageCode)
    {
        $this->reportReasonLanguageCode = $reportReasonLanguageCode;
    }

    public function getReportReasonLanguageCode()
    {
        return $this->reportReasonLanguageCode;
    }
}

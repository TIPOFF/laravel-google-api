<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_Metadata extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    protected $duplicateType = 'Google_Service_MyBusiness_Duplicate';
    protected $duplicateDataType = '';
    public $mapsUrl;
    public $newReviewUrl;

    public function setDuplicate(Google_Service_MyBusiness_Duplicate $duplicate)
    {
        $this->duplicate = $duplicate;
    }

    public function getDuplicate()
    {
        return $this->duplicate;
    }

    public function setMapsUrl($mapsUrl)
    {
        $this->mapsUrl = $mapsUrl;
    }

    public function getMapsUrl()
    {
        return $this->mapsUrl;
    }

    public function setNewReviewUrl($newReviewUrl)
    {
        $this->newReviewUrl = $newReviewUrl;
    }

    public function getNewReviewUrl()
    {
        return $this->newReviewUrl;
    }
}

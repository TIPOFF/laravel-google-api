<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_MediaInsights extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $viewCount;

    public function setViewCount($viewCount)
    {
        $this->viewCount = $viewCount;
    }

    public function getViewCount()
    {
        return $this->viewCount;
    }
}

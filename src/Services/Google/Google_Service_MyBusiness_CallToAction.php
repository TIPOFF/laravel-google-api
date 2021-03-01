<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_CallToAction extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $actionType;
    public $url;

    public function setActionType($actionType)
    {
        $this->actionType = $actionType;
    }

    public function getActionType()
    {
        return $this->actionType;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }
}

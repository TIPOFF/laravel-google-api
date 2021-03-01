<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_Dimensions extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $heightPixels;
    public $widthPixels;

    public function setHeightPixels($heightPixels)
    {
        $this->heightPixels = $heightPixels;
    }

    public function getHeightPixels()
    {
        return $this->heightPixels;
    }

    public function setWidthPixels($widthPixels)
    {
        $this->widthPixels = $widthPixels;
    }

    public function getWidthPixels()
    {
        return $this->widthPixels;
    }
}

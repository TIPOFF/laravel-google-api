<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_Money extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $currencyCode;
    public $nanos;
    public $units;

    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }

    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    public function setNanos($nanos)
    {
        $this->nanos = $nanos;
    }

    public function getNanos()
    {
        return $this->nanos;
    }

    public function setUnits($units)
    {
        $this->units = $units;
    }

    public function getUnits()
    {
        return $this->units;
    }
}

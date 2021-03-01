<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_LocalPostOffer extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $couponCode;
    public $redeemOnlineUrl;
    public $termsConditions;

    public function setCouponCode($couponCode)
    {
        $this->couponCode = $couponCode;
    }

    public function getCouponCode()
    {
        return $this->couponCode;
    }

    public function setRedeemOnlineUrl($redeemOnlineUrl)
    {
        $this->redeemOnlineUrl = $redeemOnlineUrl;
    }

    public function getRedeemOnlineUrl()
    {
        return $this->redeemOnlineUrl;
    }

    public function setTermsConditions($termsConditions)
    {
        $this->termsConditions = $termsConditions;
    }

    public function getTermsConditions()
    {
        return $this->termsConditions;
    }
}

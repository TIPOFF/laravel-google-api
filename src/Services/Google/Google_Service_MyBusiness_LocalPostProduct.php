<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_LocalPostProduct extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    protected $lowerPriceType = 'Google_Service_MyBusiness_Money';
    protected $lowerPriceDataType = '';
    public $productName;
    protected $upperPriceType = 'Google_Service_MyBusiness_Money';
    protected $upperPriceDataType = '';

    public function setLowerPrice(Google_Service_MyBusiness_Money $lowerPrice)
    {
        $this->lowerPrice = $lowerPrice;
    }

    public function getLowerPrice()
    {
        return $this->lowerPrice;
    }

    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    public function setUpperPrice(Google_Service_MyBusiness_Money $upperPrice)
    {
        $this->upperPrice = $upperPrice;
    }

    public function getUpperPrice()
    {
        return $this->upperPrice;
    }
}

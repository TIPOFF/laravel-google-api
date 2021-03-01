<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_Item extends Google_Collection
{
    protected $collection_key = 'labels';
    protected $internal_gapi_mappings = [
    ];
    public $itemId;
    protected $labelsType = 'Google_Service_MyBusiness_Label';
    protected $labelsDataType = 'array';
    protected $priceType = 'Google_Service_MyBusiness_Money';
    protected $priceDataType = '';

    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    }

    public function getItemId()
    {
        return $this->itemId;
    }

    public function setLabels($labels)
    {
        $this->labels = $labels;
    }

    public function getLabels()
    {
        return $this->labels;
    }

    public function setPrice(Google_Service_MyBusiness_Money $price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

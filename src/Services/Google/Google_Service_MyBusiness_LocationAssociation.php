<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_LocationAssociation extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $category;
    public $priceListItemId;

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setPriceListItemId($priceListItemId)
    {
        $this->priceListItemId = $priceListItemId;
    }

    public function getPriceListItemId()
    {
        return $this->priceListItemId;
    }
}

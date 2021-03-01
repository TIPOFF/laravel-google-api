<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_PriceList extends Google_Collection
{
    protected $collection_key = 'sections';
    protected $internal_gapi_mappings = [];
    protected $labelsType = 'Google_Service_MyBusiness_Label';
    protected $labelsDataType = 'array';
    public $priceListId;
    protected $sectionsType = 'Google_Service_MyBusiness_Section';
    protected $sectionsDataType = 'array';
    public $sourceUrl;

    public function setLabels($labels)
    {
        $this->labels = $labels;
    }

    public function getLabels()
    {
        return $this->labels;
    }

    public function setPriceListId($priceListId)
    {
        $this->priceListId = $priceListId;
    }

    public function getPriceListId()
    {
        return $this->priceListId;
    }

    public function setSections($sections)
    {
        $this->sections = $sections;
    }

    public function getSections()
    {
        return $this->sections;
    }

    public function setSourceUrl($sourceUrl)
    {
        $this->sourceUrl = $sourceUrl;
    }

    public function getSourceUrl()
    {
        return $this->sourceUrl;
    }
}

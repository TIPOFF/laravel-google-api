<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_Section extends Google_Collection
{
    protected $collection_key = 'labels';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_MyBusiness_Item';
    protected $itemsDataType = 'array';
    protected $labelsType = 'Google_Service_MyBusiness_Label';
    protected $labelsDataType = 'array';
    public $sectionId;
    public $sectionType;

    public function setItems($items)
    {
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setLabels($labels)
    {
        $this->labels = $labels;
    }

    public function getLabels()
    {
        return $this->labels;
    }

    public function setSectionId($sectionId)
    {
        $this->sectionId = $sectionId;
    }

    public function getSectionId()
    {
        return $this->sectionId;
    }

    public function setSectionType($sectionType)
    {
        $this->sectionType = $sectionType;
    }

    public function getSectionType()
    {
        return $this->sectionType;
    }
}

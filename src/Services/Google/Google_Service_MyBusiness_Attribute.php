<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_Attribute extends Google_Collection
{
    protected $collection_key = 'values';
    protected $internal_gapi_mappings = [
    ];
    public $attributeId;
    protected $repeatedEnumValueType = 'Google_Service_MyBusiness_RepeatedEnumAttributeValue';
    protected $repeatedEnumValueDataType = '';
    protected $urlValuesType = 'Google_Service_MyBusiness_UrlAttributeValue';
    protected $urlValuesDataType = 'array';
    public $valueType;
    public $values;

    public function setAttributeId($attributeId)
    {
        $this->attributeId = $attributeId;
    }

    public function getAttributeId()
    {
        return $this->attributeId;
    }

    public function setRepeatedEnumValue(Google_Service_MyBusiness_RepeatedEnumAttributeValue $repeatedEnumValue)
    {
        $this->repeatedEnumValue = $repeatedEnumValue;
    }

    public function getRepeatedEnumValue()
    {
        return $this->repeatedEnumValue;
    }

    public function setUrlValues($urlValues)
    {
        $this->urlValues = $urlValues;
    }

    public function getUrlValues()
    {
        return $this->urlValues;
    }

    public function setValueType($valueType)
    {
        $this->valueType = $valueType;
    }

    public function getValueType()
    {
        return $this->valueType;
    }

    public function setValues($values)
    {
        $this->values = $values;
    }

    public function getValues()
    {
        return $this->values;
    }
}

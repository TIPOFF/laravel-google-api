<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_Chain extends Google_Collection
{
    protected $collection_key = 'websites';
    protected $internal_gapi_mappings = [
    ];
    protected $chainNamesType = 'Google_Service_MyBusiness_ChainName';
    protected $chainNamesDataType = 'array';
    public $locationCount;
    public $name;
    protected $websitesType = 'Google_Service_MyBusiness_ChainUrl';
    protected $websitesDataType = 'array';

    public function setChainNames($chainNames)
    {
        $this->chainNames = $chainNames;
    }

    public function getChainNames()
    {
        return $this->chainNames;
    }

    public function setLocationCount($locationCount)
    {
        $this->locationCount = $locationCount;
    }

    public function getLocationCount()
    {
        return $this->locationCount;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setWebsites($websites)
    {
        $this->websites = $websites;
    }

    public function getWebsites()
    {
        return $this->websites;
    }
}

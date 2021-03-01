<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_SearchChainsResponse extends Google_Collection
{
    protected $collection_key = 'chains';
    protected $internal_gapi_mappings = [
    ];
    protected $chainsType = 'Google_Service_MyBusiness_Chain';
    protected $chainsDataType = 'array';

    public function setChains($chains)
    {
        $this->chains = $chains;
    }

    public function getChains()
    {
        return $this->chains;
    }
}

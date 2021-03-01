<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_RelationshipData extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $parentChain;

    public function setParentChain($parentChain)
    {
        $this->parentChain = $parentChain;
    }

    public function getParentChain()
    {
        return $this->parentChain;
    }
}

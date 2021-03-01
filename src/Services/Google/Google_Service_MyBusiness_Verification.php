<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_Verification extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $createTime;
    public $method;
    public $name;
    public $state;

    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;
    }

    public function getCreateTime()
    {
        return $this->createTime;
    }

    public function setMethod($method)
    {
        $this->method = $method;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }
}

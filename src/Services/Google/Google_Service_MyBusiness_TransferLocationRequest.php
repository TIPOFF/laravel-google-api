<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_TransferLocationRequest extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $toAccount;

    public function setToAccount($toAccount)
    {
        $this->toAccount = $toAccount;
    }

    public function getToAccount()
    {
        return $this->toAccount;
    }
}

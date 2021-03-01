<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_AddressInput extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $mailerContactName;

    public function setMailerContactName($mailerContactName)
    {
        $this->mailerContactName = $mailerContactName;
    }

    public function getMailerContactName()
    {
        return $this->mailerContactName;
    }
}

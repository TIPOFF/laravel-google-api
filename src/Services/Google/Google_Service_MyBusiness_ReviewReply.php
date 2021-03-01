<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_ReviewReply extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $comment;
    public $updateTime;

    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;
    }

    public function getUpdateTime()
    {
        return $this->updateTime;
    }
}

<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_UpsertAnswerRequest extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    protected $answerType = 'Google_Service_MyBusiness_Answer';
    protected $answerDataType = '';

    public function setAnswer(Google_Service_MyBusiness_Answer $answer)
    {
        $this->answer = $answer;
    }

    public function getAnswer()
    {
        return $this->answer;
    }
}

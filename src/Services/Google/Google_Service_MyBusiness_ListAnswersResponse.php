<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_ListAnswersResponse extends Google_Collection
{
    protected $collection_key = 'answers';
    protected $internal_gapi_mappings = [
    ];
    protected $answersType = 'Google_Service_MyBusiness_Answer';
    protected $answersDataType = 'array';
    public $nextPageToken;
    public $totalSize;

    public function setAnswers($answers)
    {
        $this->answers = $answers;
    }

    public function getAnswers()
    {
        return $this->answers;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setTotalSize($totalSize)
    {
        $this->totalSize = $totalSize;
    }

    public function getTotalSize()
    {
        return $this->totalSize;
    }
}

<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_ListQuestionsResponse extends Google_Collection
{
    protected $collection_key = 'questions';
    protected $internal_gapi_mappings = [
    ];
    public $nextPageToken;
    protected $questionsType = 'Google_Service_MyBusiness_Question';
    protected $questionsDataType = 'array';
    public $totalSize;

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setQuestions($questions)
    {
        $this->questions = $questions;
    }

    public function getQuestions()
    {
        return $this->questions;
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

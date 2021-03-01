<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_Question extends Google_Collection
{
    protected $collection_key = 'topAnswers';
    protected $internal_gapi_mappings = [
    ];
    protected $authorType = 'Google_Service_MyBusiness_Author';
    protected $authorDataType = '';
    public $createTime;
    public $name;
    public $text;
    protected $topAnswersType = 'Google_Service_MyBusiness_Answer';
    protected $topAnswersDataType = 'array';
    public $totalAnswerCount;
    public $updateTime;
    public $upvoteCount;

    public function setAuthor(Google_Service_MyBusiness_Author $author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;
    }

    public function getCreateTime()
    {
        return $this->createTime;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setTopAnswers($topAnswers)
    {
        $this->topAnswers = $topAnswers;
    }

    public function getTopAnswers()
    {
        return $this->topAnswers;
    }

    public function setTotalAnswerCount($totalAnswerCount)
    {
        $this->totalAnswerCount = $totalAnswerCount;
    }

    public function getTotalAnswerCount()
    {
        return $this->totalAnswerCount;
    }

    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;
    }

    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    public function setUpvoteCount($upvoteCount)
    {
        $this->upvoteCount = $upvoteCount;
    }

    public function getUpvoteCount()
    {
        return $this->upvoteCount;
    }
}

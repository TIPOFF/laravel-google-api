<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_LocationReview extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $name;
    protected $reviewType = 'Google_Service_MyBusiness_Review';
    protected $reviewDataType = '';

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setReview(Google_Service_MyBusiness_Review $review)
    {
        $this->review = $review;
    }

    public function getReview()
    {
        return $this->review;
    }
}

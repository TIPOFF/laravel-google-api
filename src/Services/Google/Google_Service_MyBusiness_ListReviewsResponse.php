<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_ListReviewsResponse extends Google_Collection
{
    protected $collection_key = 'reviews';
    protected $internal_gapi_mappings = [
    ];
    public $averageRating;
    public $nextPageToken;
    protected $reviewsType = 'Google_Service_MyBusiness_Review';
    protected $reviewsDataType = 'array';
    public $totalReviewCount;

    public function setAverageRating($averageRating)
    {
        $this->averageRating = $averageRating;
    }

    public function getAverageRating()
    {
        return $this->averageRating;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setReviews($reviews)
    {
        $this->reviews = $reviews;
    }

    public function getReviews()
    {
        return $this->reviews;
    }

    public function setTotalReviewCount($totalReviewCount)
    {
        $this->totalReviewCount = $totalReviewCount;
    }

    public function getTotalReviewCount()
    {
        return $this->totalReviewCount;
    }
}

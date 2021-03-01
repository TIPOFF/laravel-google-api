<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_BatchGetReviewsResponse extends Google_Collection
{
    protected $collection_key = 'locationReviews';
    protected $internal_gapi_mappings = [
    ];
    protected $locationReviewsType = 'Google_Service_MyBusiness_LocationReview';
    protected $locationReviewsDataType = 'array';
    public $nextPageToken;

    public function setLocationReviews($locationReviews)
    {
        $this->locationReviews = $locationReviews;
    }

    public function getLocationReviews()
    {
        return $this->locationReviews;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
}

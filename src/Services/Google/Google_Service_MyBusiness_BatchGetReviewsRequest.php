<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_BatchGetReviewsRequest extends Google_Collection
{
    protected $collection_key = 'locationNames';
    protected $internal_gapi_mappings = [
    ];
    public $ignoreRatingOnlyReviews;
    public $locationNames;
    public $orderBy;
    public $pageSize;
    public $pageToken;

    public function setIgnoreRatingOnlyReviews($ignoreRatingOnlyReviews)
    {
        $this->ignoreRatingOnlyReviews = $ignoreRatingOnlyReviews;
    }

    public function getIgnoreRatingOnlyReviews()
    {
        return $this->ignoreRatingOnlyReviews;
    }

    public function setLocationNames($locationNames)
    {
        $this->locationNames = $locationNames;
    }

    public function getLocationNames()
    {
        return $this->locationNames;
    }

    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
    }

    public function getOrderBy()
    {
        return $this->orderBy;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function setPageToken($pageToken)
    {
        $this->pageToken = $pageToken;
    }

    public function getPageToken()
    {
        return $this->pageToken;
    }
}

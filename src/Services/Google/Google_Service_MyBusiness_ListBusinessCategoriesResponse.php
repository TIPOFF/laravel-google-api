<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_ListBusinessCategoriesResponse extends Google_Collection
{
    protected $collection_key = 'categories';
    protected $internal_gapi_mappings = [
    ];
    protected $categoriesType = 'Google_Service_MyBusiness_Category';
    protected $categoriesDataType = 'array';
    public $nextPageToken;
    public $totalCategoryCount;

    public function setCategories($categories)
    {
        $this->categories = $categories;
    }

    public function getCategories()
    {
        return $this->categories;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setTotalCategoryCount($totalCategoryCount)
    {
        $this->totalCategoryCount = $totalCategoryCount;
    }

    public function getTotalCategoryCount()
    {
        return $this->totalCategoryCount;
    }
}

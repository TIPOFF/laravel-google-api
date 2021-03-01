<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_ListCustomerMediaItemsResponse extends Google_Collection
{
    protected $collection_key = 'mediaItems';
    protected $internal_gapi_mappings = [
    ];
    protected $mediaItemsType = 'Google_Service_MyBusiness_MediaItem';
    protected $mediaItemsDataType = 'array';
    public $nextPageToken;
    public $totalMediaItemCount;

    public function setMediaItems($mediaItems)
    {
        $this->mediaItems = $mediaItems;
    }

    public function getMediaItems()
    {
        return $this->mediaItems;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setTotalMediaItemCount($totalMediaItemCount)
    {
        $this->totalMediaItemCount = $totalMediaItemCount;
    }

    public function getTotalMediaItemCount()
    {
        return $this->totalMediaItemCount;
    }
}

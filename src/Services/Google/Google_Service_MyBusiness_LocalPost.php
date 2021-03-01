<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_LocalPost extends Google_Collection
{
    protected $collection_key = 'media';
    protected $internal_gapi_mappings = [
    ];
    protected $callToActionType = 'Google_Service_MyBusiness_CallToAction';
    protected $callToActionDataType = '';
    public $createTime;
    protected $eventType = 'Google_Service_MyBusiness_LocalPostEvent';
    protected $eventDataType = '';
    public $languageCode;
    protected $mediaType = 'Google_Service_MyBusiness_MediaItem';
    protected $mediaDataType = 'array';
    public $name;
    protected $offerType = 'Google_Service_MyBusiness_LocalPostOffer';
    protected $offerDataType = '';
    protected $productType = 'Google_Service_MyBusiness_LocalPostProduct';
    protected $productDataType = '';
    public $searchUrl;
    public $state;
    public $summary;
    public $topicType;
    public $updateTime;

    public function setCallToAction(Google_Service_MyBusiness_CallToAction $callToAction)
    {
        $this->callToAction = $callToAction;
    }

    public function getCallToAction()
    {
        return $this->callToAction;
    }

    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;
    }

    public function getCreateTime()
    {
        return $this->createTime;
    }

    public function setEvent(Google_Service_MyBusiness_LocalPostEvent $event)
    {
        $this->event = $event;
    }

    public function getEvent()
    {
        return $this->event;
    }

    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
    }

    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    public function setMedia($media)
    {
        $this->media = $media;
    }

    public function getMedia()
    {
        return $this->media;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setOffer(Google_Service_MyBusiness_LocalPostOffer $offer)
    {
        $this->offer = $offer;
    }

    public function getOffer()
    {
        return $this->offer;
    }

    public function setProduct(Google_Service_MyBusiness_LocalPostProduct $product)
    {
        $this->product = $product;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function setSearchUrl($searchUrl)
    {
        $this->searchUrl = $searchUrl;
    }

    public function getSearchUrl()
    {
        return $this->searchUrl;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function setTopicType($topicType)
    {
        $this->topicType = $topicType;
    }

    public function getTopicType()
    {
        return $this->topicType;
    }

    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;
    }

    public function getUpdateTime()
    {
        return $this->updateTime;
    }
}

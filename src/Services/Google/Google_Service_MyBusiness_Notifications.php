<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_Notifications extends Google_Collection
{
    protected $collection_key = 'notificationTypes';
    protected $internal_gapi_mappings = [
    ];
    public $name;
    public $notificationTypes;
    public $topicName;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setNotificationTypes($notificationTypes)
    {
        $this->notificationTypes = $notificationTypes;
    }

    public function getNotificationTypes()
    {
        return $this->notificationTypes;
    }

    public function setTopicName($topicName)
    {
        $this->topicName = $topicName;
    }

    public function getTopicName()
    {
        return $this->topicName;
    }
}

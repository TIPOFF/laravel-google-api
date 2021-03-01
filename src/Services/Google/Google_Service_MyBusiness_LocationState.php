<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Model;

class Google_Service_MyBusiness_LocationState extends Google_Model
{
    protected $internal_gapi_mappings = [
    ];
    public $canDelete;
    public $canUpdate;
    public $hasPendingEdits;
    public $hasPendingVerification;
    public $isDisabled;
    public $isDisconnected;
    public $isDuplicate;
    public $isGoogleUpdated;
    public $isLocalPostApiDisabled;
    public $isPendingReview;
    public $isPublished;
    public $isSuspended;
    public $isVerified;
    public $needsReverification;

    public function setCanDelete($canDelete)
    {
        $this->canDelete = $canDelete;
    }

    public function getCanDelete()
    {
        return $this->canDelete;
    }

    public function setCanUpdate($canUpdate)
    {
        $this->canUpdate = $canUpdate;
    }

    public function getCanUpdate()
    {
        return $this->canUpdate;
    }

    public function setHasPendingEdits($hasPendingEdits)
    {
        $this->hasPendingEdits = $hasPendingEdits;
    }

    public function getHasPendingEdits()
    {
        return $this->hasPendingEdits;
    }

    public function setHasPendingVerification($hasPendingVerification)
    {
        $this->hasPendingVerification = $hasPendingVerification;
    }

    public function getHasPendingVerification()
    {
        return $this->hasPendingVerification;
    }

    public function setIsDisabled($isDisabled)
    {
        $this->isDisabled = $isDisabled;
    }

    public function getIsDisabled()
    {
        return $this->isDisabled;
    }

    public function setIsDisconnected($isDisconnected)
    {
        $this->isDisconnected = $isDisconnected;
    }

    public function getIsDisconnected()
    {
        return $this->isDisconnected;
    }

    public function setIsDuplicate($isDuplicate)
    {
        $this->isDuplicate = $isDuplicate;
    }

    public function getIsDuplicate()
    {
        return $this->isDuplicate;
    }

    public function setIsGoogleUpdated($isGoogleUpdated)
    {
        $this->isGoogleUpdated = $isGoogleUpdated;
    }

    public function getIsGoogleUpdated()
    {
        return $this->isGoogleUpdated;
    }

    public function setIsLocalPostApiDisabled($isLocalPostApiDisabled)
    {
        $this->isLocalPostApiDisabled = $isLocalPostApiDisabled;
    }

    public function getIsLocalPostApiDisabled()
    {
        return $this->isLocalPostApiDisabled;
    }

    public function setIsPendingReview($isPendingReview)
    {
        $this->isPendingReview = $isPendingReview;
    }

    public function getIsPendingReview()
    {
        return $this->isPendingReview;
    }

    public function setIsPublished($isPublished)
    {
        $this->isPublished = $isPublished;
    }

    public function getIsPublished()
    {
        return $this->isPublished;
    }

    public function setIsSuspended($isSuspended)
    {
        $this->isSuspended = $isSuspended;
    }

    public function getIsSuspended()
    {
        return $this->isSuspended;
    }

    public function setIsVerified($isVerified)
    {
        $this->isVerified = $isVerified;
    }

    public function getIsVerified()
    {
        return $this->isVerified;
    }

    public function setNeedsReverification($needsReverification)
    {
        $this->needsReverification = $needsReverification;
    }

    public function getNeedsReverification()
    {
        return $this->needsReverification;
    }
}

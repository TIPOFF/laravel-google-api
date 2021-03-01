<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_ListInvitationsResponse extends Google_Collection
{
    protected $collection_key = 'invitations';
    protected $internal_gapi_mappings = [
    ];
    protected $invitationsType = 'Google_Service_MyBusiness_Invitation';
    protected $invitationsDataType = 'array';

    public function setInvitations($invitations)
    {
        $this->invitations = $invitations;
    }

    public function getInvitations()
    {
        return $this->invitations;
    }
}

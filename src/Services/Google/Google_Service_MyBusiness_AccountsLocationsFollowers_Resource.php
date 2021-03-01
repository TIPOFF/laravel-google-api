<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Service_Resource;

/**
 * The "followers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $followers = $mybusinessService->followers;
 *  </code>.
 */
class Google_Service_MyBusiness_AccountsLocationsFollowers_Resource extends Google_Service_Resource
{
    /**
     * Get the followers settings for a location.
     *
     * NOT_FOUND is returned if either the account or the location doesn't exist.
     * PRECONDITION_FAILED is returned if the location is not verified nor connected
     * to Maps. (followers.getMetadata)
     *
     * @param string $name The resource name of the location's followers metadata.
     * accounts/{account_id}/locations/{location_id}/followers/metadata
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_FollowersMetadata
     */
    public function getMetadata($name, $optParams = [])
    {
        $params = ['name' => $name];
        $params = array_merge($params, $optParams);

        return $this->call('getMetadata', [$params], 'Google_Service_MyBusiness_FollowersMetadata');
    }
}

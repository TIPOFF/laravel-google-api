<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Service_Resource;

/**
 * The "googleLocations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $googleLocations = $mybusinessService->googleLocations;
 *  </code>.
 */
class Google_Service_MyBusiness_GoogleLocations_Resource extends Google_Service_Resource
{
    /**
     * Report a GoogleLocation. (googleLocations.report).
     *
     * @param string $name Resource name of a [GoogleLocation], in the format
     * `googleLocations/{googleLocationId}`.
     * @param Google_ReportGoogleLocationRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_MybusinessEmpty
     */
    public function report($name, Google_Service_MyBusiness_ReportGoogleLocationRequest $postBody, $optParams = [])
    {
        $params = ['name' => $name, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('report', [$params], 'Google_Service_MyBusiness_MybusinessEmpty');
    }

    /**
     * Search all of the possible locations that are a match to the specified
     * request. (googleLocations.search).
     *
     * @param Google_SearchGoogleLocationsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_SearchGoogleLocationsResponse
     */
    public function search(Google_Service_MyBusiness_SearchGoogleLocationsRequest $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('search', [$params], 'Google_Service_MyBusiness_SearchGoogleLocationsResponse');
    }
}

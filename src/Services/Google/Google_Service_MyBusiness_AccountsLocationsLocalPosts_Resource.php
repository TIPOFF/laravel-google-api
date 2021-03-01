<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Service_Resource;

/**
 * The "localPosts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $localPosts = $mybusinessService->localPosts;
 *  </code>.
 */
class Google_Service_MyBusiness_AccountsLocationsLocalPosts_Resource extends Google_Service_Resource
{
    /**
     * Creates a new local post associated with the specified location, and returns
     * it. (localPosts.create).
     *
     * @param string $parent The name of the location in which to create this local
     * post.
     * @param Google_LocalPost $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_LocalPost
     */
    public function create($parent, Google_Service_MyBusiness_LocalPost $postBody, $optParams = [])
    {
        $params = ['parent' => $parent, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('create', [$params], 'Google_Service_MyBusiness_LocalPost');
    }

    /**
     * Deletes a local post. Returns `NOT_FOUND` if the local post does not exist.
     * (localPosts.delete).
     *
     * @param string $name The name of the local post to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_MybusinessEmpty
     */
    public function delete($name, $optParams = [])
    {
        $params = ['name' => $name];
        $params = array_merge($params, $optParams);

        return $this->call('delete', [$params], 'Google_Service_MyBusiness_MybusinessEmpty');
    }

    /**
     * Gets the specified local post. Returns `NOT_FOUND` if the local post does not
     * exist. (localPosts.get).
     *
     * @param string $name The name of the local post to fetch.
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_LocalPost
     */
    public function get($name, $optParams = [])
    {
        $params = ['name' => $name];
        $params = array_merge($params, $optParams);

        return $this->call('get', [$params], 'Google_Service_MyBusiness_LocalPost');
    }

    /**
     * Returns a list of local posts associated with a location.
     * (localPosts.listAccountsLocationsLocalPosts).
     *
     * @param string $parent The name of the location whose local posts will be
     * listed.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken If specified, returns the next page of local
     * posts.
     * @opt_param int pageSize How many local posts to return per page. Default of
     * 20. The minimum is 1, and maximum page size is 100.
     * @return Google_Service_MyBusiness_ListLocalPostsResponse
     */
    public function listAccountsLocationsLocalPosts($parent, $optParams = [])
    {
        $params = ['parent' => $parent];
        $params = array_merge($params, $optParams);

        return $this->call('list', [$params], 'Google_Service_MyBusiness_ListLocalPostsResponse');
    }

    /**
     * Updates the specified local post and returns the updated local post.
     * (localPosts.patch).
     *
     * @param string $name The name of the local post to update.
     * @param Google_LocalPost $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string updateMask The specific fields to update. You must specify
     * each field that is being updated in the mask.
     * @return Google_Service_MyBusiness_LocalPost
     */
    public function patch($name, Google_Service_MyBusiness_LocalPost $postBody, $optParams = [])
    {
        $params = ['name' => $name, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('patch', [$params], 'Google_Service_MyBusiness_LocalPost');
    }

    /**
     * Returns insights for a set of local posts associated with a single listing.
     * Which metrics and how they are reported are options specified in the request
     * proto. Note: Insight reports are limited to 100 `local_post_names` per call.
     * (localPosts.reportInsights).
     *
     * @param string $name Required. The name of the location for which to fetch
     * insights.
     * @param Google_ReportLocalPostInsightsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_ReportLocalPostInsightsResponse
     */
    public function reportInsights($name, Google_Service_MyBusiness_ReportLocalPostInsightsRequest $postBody, $optParams = [])
    {
        $params = ['name' => $name, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('reportInsights', [$params], 'Google_Service_MyBusiness_ReportLocalPostInsightsResponse');
    }
}

<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Service_Resource;

/**
 * The "reviews" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $reviews = $mybusinessService->reviews;
 *  </code>.
 */
class Google_Service_MyBusiness_AccountsLocationsReviews_Resource extends Google_Service_Resource
{
    /**
     * Deletes the response to the specified review. This operation is only valid if
     * the specified location is verified. (reviews.deleteReply).
     *
     * @param string $name The name of the review reply to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_MybusinessEmpty
     */
    public function deleteReply($name, $optParams = [])
    {
        $params = ['name' => $name];
        $params = array_merge($params, $optParams);

        return $this->call('deleteReply', [$params], 'Google_Service_MyBusiness_MybusinessEmpty');
    }

    /**
     * Returns the specified review. This operation is only valid if the specified
     * location is verified. Returns `NOT_FOUND` if the review does not exist, or
     * has been deleted. (reviews.get).
     *
     * @param string $name The name of the review to fetch.
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_Review
     */
    public function get($name, $optParams = [])
    {
        $params = ['name' => $name];
        $params = array_merge($params, $optParams);

        return $this->call('get', [$params], 'Google_Service_MyBusiness_Review');
    }

    /**
     * Returns the paginated list of reviews for the specified location. This
     * operation is only valid if the specified location is verified.
     * (reviews.listAccountsLocationsReviews).
     *
     * @param string $parent The name of the location to fetch reviews for.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string orderBy Specifies the field to sort reviews by. If
     * unspecified, the order of reviews returned will default to `update_time
     * desc`. Valid orders to sort by are `rating`, `rating desc` and `update_time
     * desc`.
     * @opt_param string pageToken If specified, it fetches the next page of
     * reviews.
     * @opt_param int pageSize How many reviews to fetch per page. The maximum
     * `page_size` is 200.
     * @return Google_Service_MyBusiness_ListReviewsResponse
     */
    public function listAccountsLocationsReviews($parent, $optParams = [])
    {
        $params = ['parent' => $parent];
        $params = array_merge($params, $optParams);

        return $this->call('list', [$params], 'Google_Service_MyBusiness_ListReviewsResponse');
    }

    /**
     * Updates the reply to the specified review. A reply is created if one does not
     * exist. This operation is only valid if the specified location is verified.
     * (reviews.updateReply).
     *
     * @param string $name The name of the review to respond to.
     * @param Google_ReviewReply $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_ReviewReply
     */
    public function updateReply($name, Google_Service_MyBusiness_ReviewReply $postBody, $optParams = [])
    {
        $params = ['name' => $name, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('updateReply', [$params], 'Google_Service_MyBusiness_ReviewReply');
    }
}

<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Service_Resource;

/**
 * The "admins" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $admins = $mybusinessService->admins;
 *  </code>.
 */
class Google_Service_MyBusiness_AccountsLocationsAdmins_Resource extends Google_Service_Resource
{
    /**
     * Invites the specified user to become an administrator for the specified
     * location. The invitee must accept the invitation in order to be granted
     * access to the location. See AcceptInvitation to programmatically accept an
     * invitation. (admins.create).
     *
     * @param string $parent The resource name of the location this admin is created
     * for.
     * @param Google_Admin $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_Admin
     */
    public function create($parent, Google_Service_MyBusiness_Admin $postBody, $optParams = [])
    {
        $params = ['parent' => $parent, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('create', [$params], 'Google_Service_MyBusiness_Admin');
    }

    /**
     * Removes the specified admin as a manager of the specified location.
     * (admins.delete).
     *
     * @param string $name The resource name of the admin to remove from the
     * location.
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
     * Lists all of the admins for the specified location.
     * (admins.listAccountsLocationsAdmins).
     *
     * @param string $parent The name of the location to list admins of.
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_ListLocationAdminsResponse
     */
    public function listAccountsLocationsAdmins($parent, $optParams = [])
    {
        $params = ['parent' => $parent];
        $params = array_merge($params, $optParams);

        return $this->call('list', [$params], 'Google_Service_MyBusiness_ListLocationAdminsResponse');
    }

    /**
     * Updates the Admin for the specified Location Admin. Only the AdminRole of the
     * Admin can be updated. (admins.patch).
     *
     * @param string $name The resource name of the admin to update.
     * @param Google_Admin $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_Admin
     */
    public function patch($name, Google_Service_MyBusiness_Admin $postBody, $optParams = [])
    {
        $params = ['name' => $name, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('patch', [$params], 'Google_Service_MyBusiness_Admin');
    }
}

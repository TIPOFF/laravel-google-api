<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Service_Resource;

/**
 * The "chains" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $chains = $mybusinessService->chains;
 *  </code>.
 */
class Google_Service_MyBusiness_Chains_Resource extends Google_Service_Resource
{
    /**
     * Gets the specified chain. Returns `NOT_FOUND` if the chain does not exist.
     * (chains.get).
     *
     * @param string $name The chain's resource name, in the format
     * `chains/{chain_place_id}`.
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_Chain
     */
    public function get($name, $optParams = [])
    {
        $params = ['name' => $name];
        $params = array_merge($params, $optParams);

        return $this->call('get', [$params], 'Google_Service_MyBusiness_Chain');
    }

    /**
     * Searches the chain based on chain name. (chains.search).
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param int resultCount The maximum number of matched chains to return
     * from this query. The default is 10. The maximum possible value is 500.
     * @opt_param string chainDisplayName Search for a chain by its name.
     * Exact/partial/fuzzy/related queries are supported. Examples: "walmart", "wal-
     * mart", "walmmmart", "沃尔玛"
     * @return Google_Service_MyBusiness_SearchChainsResponse
     */
    public function search($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);

        return $this->call('search', [$params], 'Google_Service_MyBusiness_SearchChainsResponse');
    }
}

<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Service_Resource;

/**
 * The "verificationTokens" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $verificationTokens = $mybusinessService->verificationTokens;
 *  </code>.
 */
class Google_Service_MyBusiness_VerificationTokens_Resource extends Google_Service_Resource
{
    /**
     * Generates a token for the provided location data as a vetted partner.
     *
     * Throws PERMISSION_DENIED if the caller is not a vetted partner account.
     * Throws FAILED_PRECONDITION if the caller's VettedStatus is INVALID.
     * (verificationTokens.generate)
     *
     * @param Google_GenerateVerificationTokenRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_GenerateVerificationTokenResponse
     */
    public function generate(Google_Service_MyBusiness_GenerateVerificationTokenRequest $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('generate', [$params], 'Google_Service_MyBusiness_GenerateVerificationTokenResponse');
    }
}

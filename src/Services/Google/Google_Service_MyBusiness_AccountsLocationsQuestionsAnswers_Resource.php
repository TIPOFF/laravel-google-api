<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Service_Resource;

/**
 * The "answers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $answers = $mybusinessService->answers;
 *  </code>.
 */
class Google_Service_MyBusiness_AccountsLocationsQuestionsAnswers_Resource extends Google_Service_Resource
{
    /**
     * Deletes the answer written by the current user to a question.
     * (answers.delete).
     *
     * @param string $parent The name of the question to delete an answer for.
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_MybusinessEmpty
     */
    public function delete($parent, $optParams = [])
    {
        $params = ['parent' => $parent];
        $params = array_merge($params, $optParams);

        return $this->call('delete', [$params], 'Google_Service_MyBusiness_MybusinessEmpty');
    }

    /**
     * Returns the paginated list of answers for a specified question.
     * (answers.listAccountsLocationsQuestionsAnswers).
     *
     * @param string $parent The name of the question to fetch answers for.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string orderBy The order to return the answers. Valid options
     * include 'update_time desc' and 'upvote_count desc', which will return the
     * answers sorted descendingly by the requested field. The default sort order is
     * 'update_time desc'.
     * @opt_param string pageToken If specified, the next page of answers is
     * retrieved.
     * @opt_param int pageSize How many answers to fetch per page. The default and
     * maximum `page_size` values are 10.
     * @return Google_Service_MyBusiness_ListAnswersResponse
     */
    public function listAccountsLocationsQuestionsAnswers($parent, $optParams = [])
    {
        $params = ['parent' => $parent];
        $params = array_merge($params, $optParams);

        return $this->call('list', [$params], 'Google_Service_MyBusiness_ListAnswersResponse');
    }

    /**
     * Creates an answer or updates the existing answer written by the user for the
     * specified question. A user can only create one answer per question.
     * (answers.upsert).
     *
     * @param string $parent The name of the question to write an answer for.
     * @param Google_UpsertAnswerRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_MyBusiness_Answer
     */
    public function upsert($parent, Google_Service_MyBusiness_UpsertAnswerRequest $postBody, $optParams = [])
    {
        $params = ['parent' => $parent, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('upsert', [$params], 'Google_Service_MyBusiness_Answer');
    }
}

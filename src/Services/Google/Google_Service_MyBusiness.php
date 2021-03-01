<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Client;
use Google_Service;

/**
 * Service definition for MyBusiness (v4).
 *
 * <p>
 * The Google My Business API provides an interface for managing business
 * location information on Google.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/my-business/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_MyBusiness extends Google_Service
{
    public $accounts;
    public $accounts_admins;
    public $accounts_invitations;
    public $accounts_locations;
    public $accounts_locations_admins;
    public $accounts_locations_followers;
    public $accounts_locations_localPosts;
    public $accounts_locations_media;
    public $accounts_locations_media_customers;
    public $accounts_locations_questions;
    public $accounts_locations_questions_answers;
    public $accounts_locations_reviews;
    public $accounts_locations_verifications;
    public $attributes;
    public $categories;
    public $chains;
    public $googleLocations;
    public $verificationTokens;

    /**
     * Constructs the internal representation of the MyBusiness service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->rootUrl = 'https://mybusiness.googleapis.com/';
        $this->servicePath = '';
        $this->version = 'v4';
        $this->serviceName = 'mybusiness';

        $this->accounts = new Google_Service_MyBusiness_Accounts_Resource(
            $this,
            $this->serviceName,
            'accounts',
            [
                'methods' => [
                    'create' => [
                        'path' => 'v4/accounts',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'primaryOwner' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                        ],
                    ], 'deleteNotifications' => [
                        'path' => 'v4/{+name}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'generateAccountNumber' => [
                        'path' => 'v4/{+name}:generateAccountNumber',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'get' => [
                        'path' => 'v4/{+name}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'getNotifications' => [
                        'path' => 'v4/{+name}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'list' => [
                        'path' => 'v4/accounts',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'filter' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'pageToken' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'name' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'pageSize' => [
                                'location' => 'query',
                                'type' => 'integer',
                            ],
                        ],
                    ], 'listRecommendGoogleLocations' => [
                        'path' => 'v4/{+name}:recommendGoogleLocations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'pageToken' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'pageSize' => [
                                'location' => 'query',
                                'type' => 'integer',
                            ],
                        ],
                    ], 'update' => [
                        'path' => 'v4/{+name}',
                        'httpMethod' => 'PUT',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'validateOnly' => [
                                'location' => 'query',
                                'type' => 'boolean',
                            ],
                        ],
                    ], 'updateNotifications' => [
                        'path' => 'v4/{+name}',
                        'httpMethod' => 'PUT',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ]
        );
        $this->accounts_admins = new Google_Service_MyBusiness_AccountsAdmins_Resource(
            $this,
            $this->serviceName,
            'admins',
            [
                'methods' => [
                    'create' => [
                        'path' => 'v4/{+parent}/admins',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'parent' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'delete' => [
                        'path' => 'v4/{+name}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'list' => [
                        'path' => 'v4/{+parent}/admins',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'parent' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'patch' => [
                        'path' => 'v4/{+name}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ]
        );
        $this->accounts_invitations = new Google_Service_MyBusiness_AccountsInvitations_Resource(
            $this,
            $this->serviceName,
            'invitations',
            [
                'methods' => [
                    'accept' => [
                        'path' => 'v4/{+name}:accept',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'decline' => [
                        'path' => 'v4/{+name}:decline',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'list' => [
                        'path' => 'v4/{+parent}/invitations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'parent' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'targetType' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ]
        );
        $this->accounts_locations = new Google_Service_MyBusiness_AccountsLocations_Resource(
            $this,
            $this->serviceName,
            'locations',
            [
                'methods' => [
                    'associate' => [
                        'path' => 'v4/{+name}:associate',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'batchGet' => [
                        'path' => 'v4/{+name}/locations:batchGet',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'batchGetReviews' => [
                        'path' => 'v4/{+name}/locations:batchGetReviews',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'clearAssociation' => [
                        'path' => 'v4/{+name}:clearAssociation',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'create' => [
                        'path' => 'v4/{+parent}/locations',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'parent' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'validateOnly' => [
                                'location' => 'query',
                                'type' => 'boolean',
                            ],
                            'requestId' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                        ],
                    ], 'delete' => [
                        'path' => 'v4/{+name}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'fetchVerificationOptions' => [
                        'path' => 'v4/{+name}:fetchVerificationOptions',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'findMatches' => [
                        'path' => 'v4/{+name}:findMatches',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'get' => [
                        'path' => 'v4/{+name}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'getGoogleUpdated' => [
                        'path' => 'v4/{+name}:googleUpdated',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'list' => [
                        'path' => 'v4/{+parent}/locations',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'parent' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'orderBy' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'languageCode' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'pageSize' => [
                                'location' => 'query',
                                'type' => 'integer',
                            ],
                            'filter' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'pageToken' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                        ],
                    ], 'patch' => [
                        'path' => 'v4/{+name}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'validateOnly' => [
                                'location' => 'query',
                                'type' => 'boolean',
                            ],
                            'attributeMask' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'updateMask' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                        ],
                    ], 'reportInsights' => [
                        'path' => 'v4/{+name}/locations:reportInsights',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'transfer' => [
                        'path' => 'v4/{+name}:transfer',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'verify' => [
                        'path' => 'v4/{+name}:verify',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ]
        );
        $this->accounts_locations_admins = new Google_Service_MyBusiness_AccountsLocationsAdmins_Resource(
            $this,
            $this->serviceName,
            'admins',
            [
                'methods' => [
                    'create' => [
                        'path' => 'v4/{+parent}/admins',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'parent' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'delete' => [
                        'path' => 'v4/{+name}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'list' => [
                        'path' => 'v4/{+parent}/admins',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'parent' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'patch' => [
                        'path' => 'v4/{+name}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ]
        );
        $this->accounts_locations_followers = new Google_Service_MyBusiness_AccountsLocationsFollowers_Resource(
            $this,
            $this->serviceName,
            'followers',
            [
                'methods' => [
                    'getMetadata' => [
                        'path' => 'v4/{+name}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ]
        );
        $this->accounts_locations_localPosts = new Google_Service_MyBusiness_AccountsLocationsLocalPosts_Resource(
            $this,
            $this->serviceName,
            'localPosts',
            [
                'methods' => [
                    'create' => [
                        'path' => 'v4/{+parent}/localPosts',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'parent' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'delete' => [
                        'path' => 'v4/{+name}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'get' => [
                        'path' => 'v4/{+name}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'list' => [
                        'path' => 'v4/{+parent}/localPosts',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'parent' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'pageToken' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'pageSize' => [
                                'location' => 'query',
                                'type' => 'integer',
                            ],
                        ],
                    ], 'patch' => [
                        'path' => 'v4/{+name}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'updateMask' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                        ],
                    ], 'reportInsights' => [
                        'path' => 'v4/{+name}/localPosts:reportInsights',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ]
        );
        $this->accounts_locations_media = new Google_Service_MyBusiness_AccountsLocationsMedia_Resource(
            $this,
            $this->serviceName,
            'media',
            [
                'methods' => [
                    'create' => [
                        'path' => 'v4/{+parent}/media',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'parent' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'delete' => [
                        'path' => 'v4/{+name}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'get' => [
                        'path' => 'v4/{+name}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'list' => [
                        'path' => 'v4/{+parent}/media',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'parent' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'pageToken' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'pageSize' => [
                                'location' => 'query',
                                'type' => 'integer',
                            ],
                        ],
                    ], 'patch' => [
                        'path' => 'v4/{+name}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'updateMask' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                        ],
                    ], 'startUpload' => [
                        'path' => 'v4/{+parent}/media:startUpload',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'parent' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ]
        );
        $this->accounts_locations_media_customers = new Google_Service_MyBusiness_AccountsLocationsMediaCustomers_Resource(
            $this,
            $this->serviceName,
            'customers',
            [
                'methods' => [
                    'get' => [
                        'path' => 'v4/{+name}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'list' => [
                        'path' => 'v4/{+parent}/media/customers',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'parent' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'pageToken' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'pageSize' => [
                                'location' => 'query',
                                'type' => 'integer',
                            ],
                        ],
                    ],
                ],
            ]
        );
        $this->accounts_locations_questions = new Google_Service_MyBusiness_AccountsLocationsQuestions_Resource(
            $this,
            $this->serviceName,
            'questions',
            [
                'methods' => [
                    'create' => [
                        'path' => 'v4/{+parent}/questions',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'parent' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'delete' => [
                        'path' => 'v4/{+name}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'list' => [
                        'path' => 'v4/{+parent}/questions',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'parent' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'orderBy' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'pageSize' => [
                                'location' => 'query',
                                'type' => 'integer',
                            ],
                            'filter' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'pageToken' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'answersPerQuestion' => [
                                'location' => 'query',
                                'type' => 'integer',
                            ],
                        ],
                    ], 'patch' => [
                        'path' => 'v4/{+name}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ]
        );
        $this->accounts_locations_questions_answers = new Google_Service_MyBusiness_AccountsLocationsQuestionsAnswers_Resource(
            $this,
            $this->serviceName,
            'answers',
            [
                'methods' => [
                    'delete' => [
                        'path' => 'v4/{+parent}/answers:delete',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'parent' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'list' => [
                        'path' => 'v4/{+parent}/answers',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'parent' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'orderBy' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'pageToken' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'pageSize' => [
                                'location' => 'query',
                                'type' => 'integer',
                            ],
                        ],
                    ], 'upsert' => [
                        'path' => 'v4/{+parent}/answers:upsert',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'parent' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ]
        );
        $this->accounts_locations_reviews = new Google_Service_MyBusiness_AccountsLocationsReviews_Resource(
            $this,
            $this->serviceName,
            'reviews',
            [
                'methods' => [
                    'deleteReply' => [
                        'path' => 'v4/{+name}/reply',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'get' => [
                        'path' => 'v4/{+name}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'list' => [
                        'path' => 'v4/{+parent}/reviews',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'parent' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'orderBy' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'pageToken' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'pageSize' => [
                                'location' => 'query',
                                'type' => 'integer',
                            ],
                        ],
                    ], 'updateReply' => [
                        'path' => 'v4/{+name}/reply',
                        'httpMethod' => 'PUT',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ]
        );
        $this->accounts_locations_verifications = new Google_Service_MyBusiness_AccountsLocationsVerifications_Resource(
            $this,
            $this->serviceName,
            'verifications',
            [
                'methods' => [
                    'complete' => [
                        'path' => 'v4/{+name}:complete',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'list' => [
                        'path' => 'v4/{+parent}/verifications',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'parent' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'pageToken' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'pageSize' => [
                                'location' => 'query',
                                'type' => 'integer',
                            ],
                        ],
                    ],
                ],
            ]
        );
        $this->attributes = new Google_Service_MyBusiness_Attributes_Resource(
            $this,
            $this->serviceName,
            'attributes',
            [
                'methods' => [
                    'list' => [
                        'path' => 'v4/attributes',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'languageCode' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'name' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'pageSize' => [
                                'location' => 'query',
                                'type' => 'integer',
                            ],
                            'country' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'pageToken' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'categoryId' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ]
        );
        $this->categories = new Google_Service_MyBusiness_Categories_Resource(
            $this,
            $this->serviceName,
            'categories',
            [
                'methods' => [
                    'list' => [
                        'path' => 'v4/categories',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'searchTerm' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'regionCode' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'pageToken' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'pageSize' => [
                                'location' => 'query',
                                'type' => 'integer',
                            ],
                            'languageCode' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ]
        );
        $this->chains = new Google_Service_MyBusiness_Chains_Resource(
            $this,
            $this->serviceName,
            'chains',
            [
                'methods' => [
                    'get' => [
                        'path' => 'v4/{+name}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'search' => [
                        'path' => 'v4/chains:search',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'resultCount' => [
                                'location' => 'query',
                                'type' => 'integer',
                            ],
                            'chainDisplayName' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ]
        );
        $this->googleLocations = new Google_Service_MyBusiness_GoogleLocations_Resource(
            $this,
            $this->serviceName,
            'googleLocations',
            [
                'methods' => [
                    'report' => [
                        'path' => 'v4/{+name}:report',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'name' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'search' => [
                        'path' => 'v4/googleLocations:search',
                        'httpMethod' => 'POST',
                        'parameters' => [],
                    ],
                ],
            ]
        );
        $this->verificationTokens = new Google_Service_MyBusiness_VerificationTokens_Resource(
            $this,
            $this->serviceName,
            'verificationTokens',
            [
                'methods' => [
                    'generate' => [
                        'path' => 'v4/verificationTokens:generate',
                        'httpMethod' => 'POST',
                        'parameters' => [],
                    ],
                ],
            ]
        );
    }
}

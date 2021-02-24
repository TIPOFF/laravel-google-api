<?php

namespace Tipoff\GoogleApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Google_Service_MyBusiness
 */
class GoogleMyBusinessFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'google-my-business-client';
    }
}

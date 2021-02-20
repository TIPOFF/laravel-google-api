<?php

declare(strict_types=1);

namespace Tipoff\LaravelGoogleApi\Tests;

use Laravel\Nova\NovaCoreServiceProvider;
use Tipoff\LaravelGoogleApi\LaravelGoogleApiServiceProvider;
use Tipoff\LaravelGoogleApi\Tests\Support\Providers\NovaTestbenchServiceProvider;
use Tipoff\Locations\LocationsServiceProvider;
use Tipoff\Support\SupportServiceProvider;
use Tipoff\TestSupport\BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            NovaCoreServiceProvider::class,
            NovaTestbenchServiceProvider::class,
            LaravelGoogleApiServiceProvider::class,
            SupportServiceProvider::class,
            LocationsServiceProvider::class,
        ];
    }
}

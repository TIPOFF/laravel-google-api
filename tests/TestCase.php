<?php

declare(strict_types=1);

namespace Tipoff\GoogleApi\Tests;

use Tipoff\GoogleApi\GoogleApiServiceProvider;
use Tipoff\Support\SupportServiceProvider;
use Tipoff\TestSupport\BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            GoogleApiServiceProvider::class,
            SupportServiceProvider::class,
        ];
    }
}

<?php

declare(strict_types=1);

namespace Tipoff\GoogleApi\Tests;

use Tipoff\GoogleApi\GoogleApiServiceProvider;
use Tipoff\GoogleApi\Models\Key;
use Tipoff\Support\SupportServiceProvider;
use Tipoff\TestSupport\BaseTestCase;

class TestCase extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();

        if (file_exists(dirname(__DIR__) . '/.env')) {
            $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__.'/../');
            $dotenv->load();

            Key::updateOrCreate(
                ['slug' => config('google-api.my-business.access-token-slug')],
                ['value' => env('GOOGLE_MYBUSINESS_ACCESS_TOKEN_VALUE')]
            );
        }
    }

    protected function getPackageProviders($app)
    {
        return [
            GoogleApiServiceProvider::class,
            SupportServiceProvider::class,
        ];
    }
}

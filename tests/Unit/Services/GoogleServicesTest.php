<?php

namespace Tipoff\GoogleApi\Tests\Unit\Services;

use Google_Service_MyBusiness;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tipoff\GoogleApi\Models\Key;
use Tipoff\GoogleApi\Tests\TestCase;

class GoogleServicesTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        if (file_exists(dirname(__DIR__) . '/../../.env.test')) {
            $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__.'/../../../', '.env.test');
            $dotenv->load();

            config(['google-api' => include(realpath(__DIR__.'/../../../config/google-api.php'))]);

            Key::updateOrCreate(
                ['slug' => config('google-api.my-business.access-token-slug')],
                ['value' => env('GOOGLE_MYBUSINESS_ACCESS_TOKEN_VALUE')]
            );
        }
    }

    /** @test */
    public function it_builds_the_Google_My_Business_service() {
        // If we don't have an actual key for our testing in the .env.test
        // file, create a mock one here that the Google client will accept
        // for creating the client.
        Key::firstOrCreate(
            ['slug' => config('google-api.my-business.access-token-slug')],
            ['value' => config('google-api.test.mock-json-token')]
        );

        $service = app()->make(Google_Service_MyBusiness::class);

        $this->assertInstanceOf(Google_Service_MyBusiness::class, $service);
    }
}

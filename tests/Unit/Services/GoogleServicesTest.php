<?php

namespace Tipoff\GoogleApi\Tests\Unit\Services;

use Google_Service_Analytics;
use Google_Service_MyBusiness;
use Google_Service_YouTube;
use Google_Service_YouTubeAnalytics;
use Illuminate\Foundation\Testing\RefreshDatabase;
use SKAgarwal\GoogleApi\PlacesApi;
use Tipoff\GoogleApi\Models\Key;
use Tipoff\GoogleApi\Tests\TestCase;

class GoogleServicesTest extends TestCase
{
    use RefreshDatabase;

    protected string $fakeJsonToken;

    public function setUp(): void
    {
        parent::setUp();

        $this->fakeJsonToken = '{"access_token":"mock-access-token","expires_in":3599,"scope":"https:\/\/www.googleapis.com\/auth\/business.manage","token_type":"Bearer","created":'.time().',"refresh_token":"mock-refresh-token"}';

        // Because of the order in which Testbench loads things, we don't
        // have access to our .env.test variables when the config is initially
        // set. Override the config settings here so that we can test properly.
        if (file_exists(dirname(__DIR__) . '/../../.env.test')) {
            $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__.'/../../../', '.env.test');
            $dotenv->load();

            config(['google-api' => include(realpath(__DIR__.'/../../../config/google-api.php'))]);

            Key::updateOrCreate(
                ['slug' => config('google-api.my-business.access-token-slug')],
                [
                    'value' => env('GOOGLE_MYBUSINESS_ACCESS_TOKEN_VALUE'),
                    'creator_id' => randomOrCreate(app('user')),
                    'updater_id' => randomOrCreate(app('user')),
                ]
            );
        }
    }

    /**
     * If we don't have an actual key for our testing in the .env.test
     * file, create a mock one here that the Google client will accept
     * for creating the client.
     */
    protected function mockJsonToken(string $serviceName) : void
    {
        Key::firstOrCreate(
            ['slug' => config("google-api.$serviceName.access-token-slug")],
            [
                'value' => $this->fakeJsonToken,
                'creator_id' => randomOrCreate(app('user')),
                'updater_id' => randomOrCreate(app('user')),
            ]
        );
    }

    /** @test */
    public function it_builds_the_Google_My_Business_service()
    {
        $this->mockJsonToken('my-business');

        $service = app()->make(Google_Service_MyBusiness::class);

        $this->assertInstanceOf(Google_Service_MyBusiness::class, $service);
    }

    /** @test */
    public function it_builds_the_Google_YouTube_service()
    {
        $this->mockJsonToken('youtube');

        $service = app()->make(Google_Service_YouTube::class);

        $this->assertInstanceOf(Google_Service_YouTube::class, $service);
    }

    /** @test */
    public function it_builds_the_Google_YouTubeAnalytics_service()
    {
        $this->mockJsonToken('youtube-analytics');

        $service = app()->make(Google_Service_YouTubeAnalytics::class);

        $this->assertInstanceOf(Google_Service_YouTubeAnalytics::class, $service);
    }

    /** @test */
    public function it_builds_the_Google_Analytics_service()
    {
        $this->mockJsonToken('analytics');

        $service = app()->make(Google_Service_Analytics::class);

        $this->assertInstanceOf(Google_Service_Analytics::class, $service);
    }

    /** @test */
    public function it_builds_the_Google_Places_service()
    {
        $service = app()->make(PlacesApi::class);

        $this->assertInstanceOf(PlacesApi::class, $service);

        dd($service->placeAutocomplete('hyrum, ut'));
    }
}

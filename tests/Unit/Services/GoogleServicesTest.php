<?php

namespace Tipoff\GoogleApi\Tests\Unit\Services;

use Google_Service_Analytics;
use Google_Service_MyBusiness;
use Google_Service_YouTube;
use Google_Service_YouTubeAnalytics;
use Illuminate\Foundation\Testing\RefreshDatabase;
use SKAgarwal\GoogleApi\PlacesApi;
use Tipoff\GoogleApi\Drivers\KeyEloquentDriver;
use Tipoff\GoogleApi\Facades\GoogleOauth;
use Tipoff\GoogleApi\GoogleServices;
use Tipoff\GoogleApi\GoogleServiceStatus;
use Tipoff\GoogleApi\Models\Key;
use Tipoff\GoogleApi\Tests\TestCase;

class GoogleServicesTest extends TestCase
{
    use RefreshDatabase;

    protected array $fakeToken;

    protected GoogleServices $googleServices;

    public function setUp(): void
    {
        parent::setUp();

        $this->fakeToken = [
            'access_token' => 'mock-access-token',
            'expires_in' => now()->addDay()->timestamp,
            'scope' => 'https://www.googleapis.com/auth/business.manage',
            'token_type' => 'Bearer',
            'created' => time(),
            'refresh_token' => 'mock-refresh-token',
        ];

        $this->googleServices = app(GoogleServices::class);

        GoogleOauth::useDriver(KeyEloquentDriver::class);

        // Because of the order in which Testbench loads things, we don't
        // have access to our .env.test variables when the config is initially
        // set. Override the config settings here so that we can test properly.
        if (file_exists(dirname(__DIR__) . '/../../.env.test')) {
            $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../../../', '.env.test');
            $dotenv->load();

            config(['google-api' => include(realpath(__DIR__ . '/../../../config/google-api.php'))]);
        }
    }

    /**
     * If we don't have an actual key for our testing in the .env.test
     * file, create a mock one here that the Google client will accept
     * for creating the client.
     */
    protected function mockJsonToken(string $serviceName): void
    {
        Key::firstOrCreate(
            ['slug' => $serviceName],
            [
                'value' => $this->fakeToken,
                'creator_id' => randomOrCreate(app('user')),
                'updater_id' => randomOrCreate(app('user')),
            ]
        );
    }

    /** @test */
    public function it_builds_the_Google_Search_Console_service()
    {
        $this->mockJsonToken('search-console');

        $accessToken = GoogleOauth::accessToken('search-console');

        $service = $this->googleServices->setAccessToken($accessToken)->searchConsole();

        $this->assertInstanceOf(\Google_Service_SearchConsole::class, $service);
    }

    /** @test */
    public function it_builds_the_Google_My_Business_service()
    {
        $this->mockJsonToken('my-business');

        $accessToken = GoogleOauth::accessToken('my-business');

        $service = $this->googleServices->setAccessToken($accessToken)->myBusiness();

        $this->assertInstanceOf(Google_Service_MyBusiness::class, $service);
    }

    /** @test */
    public function it_builds_the_Google_YouTube_service()
    {
        $this->mockJsonToken('youtube');

        $accessToken = GoogleOauth::accessToken('youtube');

        $service = $this->googleServices->setAccessToken($accessToken)->youtube();

        $this->assertInstanceOf(Google_Service_YouTube::class, $service);
    }

    /** @test */
    public function it_builds_the_Google_YouTubeAnalytics_service()
    {
        $this->mockJsonToken('youtube-analytics');

        $accessToken = GoogleOauth::accessToken('youtube-analytics');

        $service = $this->googleServices->setAccessToken($accessToken)->youtubeAnalytics();

        $this->assertInstanceOf(Google_Service_YouTubeAnalytics::class, $service);
    }

    /** @test */
    public function it_builds_the_Google_Analytics_service()
    {
        $this->mockJsonToken('analytics');

        $accessToken = GoogleOauth::accessToken('analytics');

        $service = $this->googleServices->setAccessToken($accessToken)->analytics();

        $this->assertInstanceOf(Google_Service_Analytics::class, $service);
    }

    /** @test */
    public function it_builds_the_Google_Places_service()
    {
        $service = $this->googleServices->places();

        $this->assertInstanceOf(PlacesApi::class, $service);
    }

    public function test_cannot_access_service_if_it_disabled()
    {
        config(['google-api.services.places.status' => GoogleServiceStatus::DISABLED]);

        $this->expectException(\Exception::class);

        $this->googleServices->places();
    }

    public function test_can_get_scopes()
    {
        config(['google-api.services.analytics.scopes' => Google_Service_Analytics::ANALYTICS]);

        $this->assertTrue(in_array(Google_Service_Analytics::ANALYTICS, $this->googleServices->scopes()));
    }
}

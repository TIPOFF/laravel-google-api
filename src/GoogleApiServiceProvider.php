<?php

declare(strict_types=1);

namespace Tipoff\GoogleApi;

use Exception;
use Google_Client;
use Google_Service_Analytics;
use Google_Service_MyBusiness;
use Google_Service_YouTube;
use Google_Service_YouTubeAnalytics;
use SKAgarwal\GoogleApi\PlacesApi;
use Tipoff\GoogleApi\Models\GmbAccount;
use Tipoff\GoogleApi\Models\Key;
use Tipoff\GoogleApi\Policies\GmbAccountPolicy;
use Tipoff\GoogleApi\Policies\KeyPolicy;
use Tipoff\Support\TipoffPackage;
use Tipoff\Support\TipoffServiceProvider;

class GoogleApiServiceProvider extends TipoffServiceProvider
{
    public function configureTipoffPackage(TipoffPackage $package): void
    {
        $package
            ->hasPolicies([
                Key::class => KeyPolicy::class,
                GmbAccount::class => GmbAccountPolicy::class,
            ])
            ->hasNovaResources([
                \Tipoff\GoogleApi\Nova\Key::class,
                \Tipoff\GoogleApi\Nova\GmbAccount::class,
            ])
            ->name('google-api')
            ->hasConfigFile('google-api');
    }
    
    public function register()
    {
        parent::register();

        $this->app->bind(Google_Client::class, function () {
            return new Google_Client();
        });

        $this->app->bind(Google_Service_MyBusiness::class, function () {
            $client = $this->configureClient(app()->make(Google_Client::class), 'my-business');

            return new Google_Service_MyBusiness($client);
        });

        $this->app->bind(Google_Service_YouTube::class, function () {
            $client = $this->configureClient(app()->make(Google_Client::class), 'youtube');

            return new Google_Service_YouTube($client);
        });

        $this->app->bind(Google_Service_YouTubeAnalytics::class, function () {
            $client = $this->configureClient(app()->make(Google_Client::class), 'youtube-analytics');

            return new Google_Service_YouTubeAnalytics($client);
        });

        $this->app->bind(Google_Service_Analytics::class, function () {
            $client = $this->configureClient(app()->make(Google_Client::class), 'analytics');

            return new Google_Service_Analytics($client);
        });

        $this->app->bind(PlacesApi::class, function() {
            return new PlacesApi(
                config('google-api.places.key'),
                config('google-api.places.verify_ssl'),
                config('google-api.places.headers')
            );
        });
    }

    protected function configureClient(Google_Client $client, string $configKey) : Google_Client
    {
        if (! config()->has("google-api.$configKey")) {
            throw new Exception('Invalid Google service configuration specified.');
        }

        $client->setAuthConfig(config("google-api.$configKey.client-secret"));
        $client->addScope(config("google-api.$configKey.scopes"));
        $client->setAccessType('offline');

        $token = json_decode(Key::where('slug', config("google-api.$configKey.access-token-slug"))->firstOrFail()->value, true);
        $client->setAccessToken($token);

        if ($client->isAccessTokenExpired()) {
            $client->refreshToken(array_search('refresh_token', $token));
            $token = $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());

            Key::updateOrCreate(
                ['slug' => config("google-api.$configKey.access-token-slug")],
                ['value' => json_encode($token)]
            );
        }
        
        return $client;
    }
}

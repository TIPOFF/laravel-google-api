<?php

declare(strict_types=1);

namespace Tipoff\GoogleApi;

use Exception;
use Google_Client;
use Google_Service_MyBusiness;
use Google_Service_YouTube;
use Tipoff\GoogleApi\Models\Key;
use Tipoff\Support\TipoffPackage;
use Tipoff\Support\TipoffServiceProvider;

class GoogleApiServiceProvider extends TipoffServiceProvider
{
    public function configureTipoffPackage(TipoffPackage $package): void
    {
        $package
            ->name('google-api')
            ->hasConfigFile('google-api')
            ->hasViews();
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
    }

    protected function configureClient(Google_Client $client, string $configKey) : Google_Client {
        if (!config()->has("google-api.$configKey")) {
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

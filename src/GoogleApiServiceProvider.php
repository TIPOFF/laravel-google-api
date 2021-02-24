<?php

declare(strict_types=1);

namespace Tipoff\GoogleApi;

use Google_Client;
use Google_Service_MyBusiness;
use Tipoff\GoogleApi\Models\Key;
use Tipoff\Support\TipoffPackage;
use Tipoff\Support\TipoffServiceProvider;

class GoogleApiServiceProvider extends TipoffServiceProvider
{
    public function configureTipoffPackage(TipoffPackage $package): void
    {
        $package
            ->name('google-api')
            ->hasViews()
            ->hasConfigFile('google-api');
    }
    
    public function register()
    {
        parent::register();

        $this->app->bind(Google_Client::class, function () {
            return new Google_Client();
        });

        $this->app->bind(Google_Service_MyBusiness::class, function () {
            $client = app()->make(Google_Client::class);

            $client->setAuthConfig(config('google-api.my-business.client-secret'));
            $client->addScope(['https://www.googleapis.com/auth/business.manage']);
            $client->setAccessType('offline');

            $token = json_decode(Key::where('slug', 'gmb-token')->first()->value, true);
            $client->setAccessToken($token);

            if ($client->isAccessTokenExpired()) {
                $client->refreshToken(array_search('refresh_token', $token));
                $token = $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());

                Key::updateOrCreate(
                    ['slug' => 'gmb-token'],
                    ['value' => json_encode($token)]
                );
            }

            return new Google_Service_MyBusiness($client);
        });
    }
}

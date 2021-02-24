<?php

declare(strict_types=1);

namespace Tipoff\GoogleApi;

use Tipoff\Support\TipoffPackage;
use Tipoff\Support\TipoffServiceProvider;
use Google_Client;
use Google_Service_MyBusiness;

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

        $this->app->bind('google-my-business', function($app) {
            return new Google_Service_MyBusiness($app->make(Google_Client::class));
        });
    }
}

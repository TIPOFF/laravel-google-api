<?php

declare(strict_types=1);

namespace Tipoff\GoogleApi;

use Google_Client;
use Illuminate\Support\Facades\Route;
use Tipoff\GoogleApi\Contracts\GoogleOauthDriver;
use Tipoff\GoogleApi\Drivers\JsonDriver;
use Tipoff\GoogleApi\Http\Controllers\GoogleOauthController;
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

        $this->app->bind('google-oauth', function ($app) {
            return new GoogleOauth(new Google_Client, $app['config']['google-api']);
        });
    }

    public function packageRegistered()
    {
        $this->app->singleton(GoogleOauthDriver::class, JsonDriver::class);
    }

    public function bootingPackage()
    {
        $this->setupGoogleOauthRoutes();
    }

    /**
     * Set up routes for Google Oauth process.
     */
    private function setupGoogleOauthRoutes()
    {
        Route::macro('googleOauth', function ($prefix = 'google-oauth', $middleware = []) {
            Route::group([
                'prefix' => $prefix,
                'middleware' => $middleware,
            ], function () {
                Route::get('oauth', [GoogleOauthController::class, 'redirect'])->name('google-oauth.connect');
                Route::get('callback', [GoogleOauthController::class, 'handleCallback'])->name('google-oauth.callback');
                Route::get('logout', [GoogleOauthController::class, 'logout'])->name('google-oauth.logout');
            });
        });
    }
}

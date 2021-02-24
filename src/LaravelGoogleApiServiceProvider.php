<?php

declare(strict_types=1);

namespace Tipoff\LaravelGoogleApi;

use Tipoff\Support\TipoffPackage;
use Tipoff\Support\TipoffServiceProvider;

class LaravelGoogleApiServiceProvider extends TipoffServiceProvider
{
    public function configureTipoffPackage(TipoffPackage $package): void
    {
        $package
            ->name('laravel-google-api')
            ->hasViews()
            ->hasConfigFile('google-api');
    }
}

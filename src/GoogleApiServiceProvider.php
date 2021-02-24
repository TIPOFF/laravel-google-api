<?php

declare(strict_types=1);

namespace Tipoff\GoogleApi;

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
}

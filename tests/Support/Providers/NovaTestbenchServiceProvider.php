<?php

declare(strict_types=1);

namespace Tipoff\LaravelGoogleApi\Tests\Support\Providers;

use Tipoff\LaravelGoogleApi\Nova\Competitor;
use Tipoff\LaravelGoogleApi\Nova\Insight;
use Tipoff\LaravelGoogleApi\Nova\Review;
use Tipoff\LaravelGoogleApi\Nova\Snapshot;
use Tipoff\TestSupport\Providers\BaseNovaPackageServiceProvider;

class NovaTestbenchServiceProvider extends BaseNovaPackageServiceProvider
{
    public static array $packageResources = [
        Competitor::class,
        Insight::class,
        Review::class,
        Snapshot::class,
    ];
}

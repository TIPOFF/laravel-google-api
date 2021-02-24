<?php

declare(strict_types=1);

namespace Tipoff\GoogleApi\Tests\Support\Providers;

use Tipoff\GoogleApi\Nova\Competitor;
use Tipoff\GoogleApi\Nova\Insight;
use Tipoff\GoogleApi\Nova\Review;
use Tipoff\GoogleApi\Nova\Snapshot;
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

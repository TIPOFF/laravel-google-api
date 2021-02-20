<?php

declare(strict_types=1);

namespace Tipoff\LaravelGoogleApi\Tests\Unit\Models;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tipoff\LaravelGoogleApi\Models\Key;
use Tipoff\LaravelGoogleApi\Tests\TestCase;

class KeyModelTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function create()
    {
        /** @var Key $key */
        $key = Key::factory()->create();
        $this->assertNotNull($key);
    }
}

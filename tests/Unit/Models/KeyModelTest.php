<?php

declare(strict_types=1);

namespace Tipoff\GoogleApi\Tests\Unit\Models;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tipoff\GoogleApi\Models\Key;
use Tipoff\GoogleApi\Tests\TestCase;

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

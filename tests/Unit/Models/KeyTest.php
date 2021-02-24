<?php

namespace Tipoff\GoogleApi\Tests\Unit\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tipoff\GoogleApi\Models\Key;
use Tipoff\GoogleApi\Tests\TestCase;

class KeyTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /** @test */
    public function it_has_a_slug()
    {
        $slug = $this->faker->slug;
        $key = Key::factory()->create(['slug' => $slug]);

        $this->assertEquals($slug, $key->slug);
    }

    /** @test */
    public function it_has_a_value()
    {
        $value = $this->faker->word;
        $key = Key::factory()->create(['value' => $value]);

        $this->assertEquals($value, $key->value);
    }
}

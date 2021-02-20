<?php

declare(strict_types=1);

namespace Tipoff\LaravelGoogleApi\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Tipoff\LaravelGoogleApi\Models\Key;

class KeyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Key::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->slug
        ];
    }
}

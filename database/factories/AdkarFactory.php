<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adkar>
 */
class AdkarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'content' => fake()->paragraph(),
            'source' => fake()->word(),
            'reward' => fake()->sentence(),
            'repeat_count' => fake()->numberBetween(1, 100),
            'type' => fake()->randomElement(['morning', 'evening', 'pryer']),
    ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->company(),
            'description' => fake()->sentence(),
            'price' => rand(1000, 10000),
            'profit_interval' => fake()->randomElement(['daily', 'monthly', 'weekly', 'yearly']),
            'duration' => rand(60, 60 * 60 * 24),
            'data' => json_encode([]),
        ];
    }
}

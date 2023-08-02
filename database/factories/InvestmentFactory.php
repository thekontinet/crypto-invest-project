<?php

namespace Database\Factories;

use App\Enums\Status;
use App\Models\Asset;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Investment>
 */
class InvestmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'plan_id' => Plan::factory(),
            'currency' => Asset::factory()->create()->symbol,
            'amount' => rand(1000, 10000),
            'profit' => 0,
            'rate' => 0,
            'status' => Status::OPEN,
            'end_date' => now()->addSeconds(rand(3600, 3600 * 100))
        ];
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Plan;
use App\Services\AssetService;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Plan::factory(5)->create();
        // \App\Models\User::factory(10)->create();

        app(AssetService::class)->create('BTC');

        \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@email.com',
            'is_admin' => true
        ]);
    }
}

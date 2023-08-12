<?php

namespace Tests\Feature;

use App\Dtos\MoneyDto;
use App\Enums\Status;
use App\Models\Asset;
use App\Models\Investment;
use App\Models\Plan;
use App\Models\User;
use App\Services\TransactionService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use NunoMaduro\Collision\Adapters\Phpunit\State;
use Tests\TestCase;

class InvestmentControllerTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_can_list_investment_plans(): void
    {
        $this->actingAs(User::factory()->create());
        $plans = Plan::factory(3)->create();
        $response = $this->get(route('invest.create'));

        $this->assertDatabaseCount(Plan::class, $plans->count());
    }

    public function test_can_invest(): void
    {
        $user = User::factory()->create();
        $plan = Plan::factory()->create();
        Asset::factory()->create();

        $this->actingAs($user);
        $user->wallet->credit(MoneyDto::from($plan->price->getAmount(), $user->wallet->currency));


        $response = $this->post(route('invest.store'), [
            'wallet' => $user->wallet->currency,
            'plan_id' => $plan->id,
            'amount' => $plan->price->getAmount(),
        ]);

        $this->assertDatabaseHas(Investment::class, [
            'currency' => $user->wallet->currency,
            'plan_id' => $plan->id,
            'amount' => $plan->price,
        ]);

        $response->assertRedirect();
    }

    public function test_can_upgrade_investment()
    {
        $plan = Plan::factory()->create();
        $user = User::factory()->create();
        $investment = Investment::factory()->create([
            'user_id' => $user->id,
            'status' => Status::CLOSED
        ]);
        $user->wallet->credit(MoneyDto::from($plan->price->getAmount(), $investment->currency));

        $this->actingAs($user);

        $response = $this->post(route('invest.store'), [
            'wallet' => $investment->currency,
            'plan_id' => $plan->id,
            'amount' => $plan->price->getAmount(),
        ]);

        $this->assertDatabaseHas(Investment::class, [
            'currency' => $investment->currency,
            'plan_id' => $plan->id,
            'amount' => $plan->price,
        ]);

        $response->assertRedirect();
    }

    public function test_can_withdraw_investment()
    {
        $user = User::factory()->create();
        $investment = Investment::factory()->create([
            'user_id' => $user->id,
            'status' => Status::CLOSED
        ]);

        $response = $this->actingAs($user)->put(route('invest.update', $investment));
        $investment->refresh();

        $response->assertRedirect();
        $this->assertTrue($investment->status->isWithdrawn());
    }
}

<?php

namespace Tests\Feature\Livewire;

use App\Enums\TransactionType;
use App\Http\Livewire\Transact;
use App\Models\Asset;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class TransactComponentTest extends TestCase
{
    use RefreshDatabase;
    function test_can_deposit()
    {
        $this->actingAs(User::factory()->create());
        Asset::factory()->create([
            'symbol' => 'BTC'
        ]);

        Livewire::test(Transact::class, [
            'type' => TransactionType::RECIEVE->value
        ])
        ->set('amount', 5000)
        ->set('currency', 'BTC')
        ->call('submit');

        $this->assertDatabaseHas(Transaction::class, [
            'amount' => 5000,
            'currency' => 'BTC'
        ]);
    }

    function test_amount_is_required()
    {
        $this->actingAs(User::factory()->create());

        $component = Livewire::test(Transact::class, [
            'type' => TransactionType::RECIEVE->value
        ])
        ->set('currency', 'BTC')
        ->call('submit');

        $component->assertHasErrors(['amount']);
    }

    function test_currency_is_required()
    {
        $this->actingAs(User::factory()->create());

        $component = Livewire::test(Transact::class, [
            'type' => TransactionType::RECIEVE->value
        ])
        ->set('amount', 5000)
        ->call('submit');

        $component->assertHasErrors(['currency']);
    }
}

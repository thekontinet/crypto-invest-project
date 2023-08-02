<?php

namespace App\Http\Livewire;

use App\Models\Investment;
use Livewire\Component;

class InvestmentOverview extends Component
{
    public Investment $investment;

    public function mount(Investment $investment)
    {
        $this->investment = $investment;
    }

    public function render()
    {
        return view('livewire.investment-overview');
    }
}

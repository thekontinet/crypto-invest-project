<?php

namespace App\Http\Controllers;

use App\Dtos\MoneyDto;
use App\Models\Investment;
use App\Models\Plan;
use App\Models\User;
use App\Services\InvestmentService;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{

    public function getUser(): User
    {
        return auth()->user();
    }
    public function index()
    {
        $investments = $this->getUser()->investments()->latest()->paginate();
        return view('investments', compact('investments'));
    }

    public function create()
    {
        return view('invest.list-plans', [
            'plans' => Plan::latest()->paginate()
        ]);
    }

    public function store(Request $request, InvestmentService $investmentService)
    {
        // TODO: Move to a service class
        $plan = Plan::findOrFail($request->plan_id);

        $request->validate([
            'wallet' => ['required', 'exists:assets,symbol'],
            'plan_id' => ['required', 'exists:plans,id'],
            'amount' => ['required', 'numeric', "min:{$plan->price}"],
        ], [
            'wallet.required' => 'Please select a wallet',
            'amount.min' => 'amount must be upto :min USD'
        ]);

        $wallet = $this->getUser()->walletByCurrency($request->wallet);
        $plan = Plan::find($request->plan_id);
        $amount = MoneyDto::from($request->amount, $wallet->currency);

        $investment = $investmentService->invest($plan, $wallet, $amount);

        return to_route('dashboard')
            ->with(
                'message',
                "{$investment->amount->format()} worth of investment has been added to your investment portfolio"
            );
    }

    public function show(Investment $invest)
    {
        return view('show-investment', [
            'investment' => $invest
        ]);
    }

    public function edit($planID)
    {
        $plan = Plan::find($planID);
        return view('invest.view-plan', compact('plan'));
    }

    public function update(Investment $invest, InvestmentService $investmentService)
    {
        $investmentService->withdraw($invest);
        return to_route('dashboard')->with('message', 'Withdraw has been requested successfully');
    }
}

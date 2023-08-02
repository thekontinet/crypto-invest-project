<?php

namespace App\Http\Controllers\Admin;

use App\Dtos\MoneyDto;
use App\Http\Controllers\Controller;
use App\Models\Investment;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function index(Request $request)
    {
        $investments = Investment::latest()
            ->when($request->user_id, fn($q) => $q->where('user_id', $request->user_id))
            ->paginate();
        return view('investments', compact('investments'));
    }

    public function show(Investment $investment)
    {
        return view('show-investment', compact('investment'));
    }

    public function update(Request $request, Investment $investment)
    {
        $request->validate([
            'amount' => ['sometimes', 'required', 'numeric'],
            'type' => ['required_with:amount', 'in:debit,credit'],
            'status' => ['sometimes', 'required']
        ]);

        // Add Profit
        if($request->amount){
            $multiplier = $request->type == 'credit' ? 1 : -1;
            $amount = MoneyDto::from($request->amount * $multiplier, $investment->currency);
            $investment->addProfit($amount);
        }

        // Update Status
        if($request->has('status')){
            $investment->fill([
                'status' => $request->status
            ]);
            $investment->save();
        }

        return back()->with('message', 'investment updated');
    }

    public function destroy(Investment $investment)
    {
        $investment->delete();
        return to_route('admin.investments.index')->with('message', 'investment deleted');
    }
}

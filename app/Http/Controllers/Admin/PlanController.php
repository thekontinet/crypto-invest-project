<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::latest()->paginate();
        return view('invest.list-plans', compact('plans'));
    }

    public function create()
    {
        return view('admin.plan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string'],
            'description' => ['required', 'string', 'max:500'],
            'price' => ['required', 'numeric', 'min:0'],
            'profit_interval' => ['required', 'numeric'],
            'duration' => ['required', 'numeric'],
            'data' => ['required', 'array'],
        ]);

        $plan = new Plan;
        $plan->fill($validated);
        $plan->save();

        return to_route('admin.plans.index')->with('message', "Plan Created");
    }

    public function edit(Plan $plan)
    {
        return view('admin.plan.edit', compact('plan'));
    }

    public function update(Request $request, Plan $plan)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', "unique:plans,id,{$plan->id}"],
            'description' => ['required', 'string', 'max:500'],
            'price' => ['required', 'numeric', 'min:0'],
            'profit_interval' => ['required', 'numeric'],
            'duration' => ['required', 'numeric'],
            'data' => ['required', 'array']
        ]);

        $plan->fill($validated);
        $plan->save();

        return to_route('admin.plans.index')->with('message', "Plan update");
    }

    public function destroy(Plan $plan)
    {
        $plan->delete();
        return to_route('admin.plans.index')->with('message', "Plan deleted");
    }
}

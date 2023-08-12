<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use App\Services\InvestmentService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(InvestmentService $investmentService)
    {
        if($invest = auth()->user()->investment) $investmentService->autoProfit($invest);
        return view('dashboard', [
            'user' => auth()->user()
        ]);
    }
}

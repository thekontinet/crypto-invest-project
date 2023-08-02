<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Status;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Services\TransactionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $transactions = Transaction::select(DB::raw('*, MONTHNAME(created_at) as month'))
            ->when($request->user_id, fn($q) => $q->where('user_id', $request->user_id))
            ->latest()
            ->paginate();
        return view(
            'transactions',
            compact('transactions')
        );
    }

    public function edit(Transaction $transaction)
    {
        return view(
            'admin.transaction.edit',
            compact('transaction')
        );
    }

    public function update(Request $request, Transaction $transaction, TransactionService $transactionService)
    {
        $request->validate([
            'status' => ['required']
        ]);

        if($request->status == Status::SUCCESS->value){
            $transactionService->resolve($transaction);
        }else{
            $transaction->status = $request->status;
            $transaction->save();
        }


        return back()->with('message', 'Transaction updated');
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return back()->with('message', 'Transaction deleted');
    }
}

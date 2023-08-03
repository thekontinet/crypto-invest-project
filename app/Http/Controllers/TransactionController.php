<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Services\TransactionService;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::select(DB::raw('*, MONTHNAME(created_at) as month'))
            ->where('user_id', auth()->id())
            ->latest()
            ->paginate();

        return view('transactions', [
            'transactions' => $transactions
        ]);
    }
    public function create(string $type)
    {
        return view('transaction.create', compact('type'));
    }

    public function show(Transaction $transaction)
    {
        if(
            !($transaction->status->isPending() &&
            $transaction->address)
        ) return to_route('dashboard')->with('message', 'transaction confirmed');

        $imgURL = \SimpleSoftwareIO\QrCode\Facades\QrCode::size(350)
            ->generate($transaction->address);
        return view('show-transaction', compact('transaction', 'imgURL'));
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return to_route('transactions.index')->with('message', 'Transaction canceled');
    }
}

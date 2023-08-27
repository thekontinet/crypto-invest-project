<?php

namespace App\Http\Controllers;

use App\Dtos\MoneyDto;
use App\Models\Transaction;
use App\Models\Wallet;
use App\Services\TransactionService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WalletFundController extends Controller
{
    public function store(Request $request, TransactionService $transactionService)
    {
        $data = $request->validate([
            'wallet_id' => ['required', 'exists:wallets,id'],
            'amount' => ['required', 'numeric'],
            'transaction' => ['nullable', 'boolean'],
            'type' => ['required', 'in:deposit,withdraw']
        ]);

        try {
            DB::beginTransaction();
            $wallet = Wallet::find($request->input('wallet_id'));

            if ($request->input('type') === 'deposit') {
                $transaction = $transactionService->deposit($wallet, MoneyDto::from($request->amount, 'USD'));
            } elseif ($request->input('type') === 'withdraw') {
                $transaction = $transactionService->withdraw($wallet, MoneyDto::from($request->amount, 'USD'));
            }

            $transactionService->resolve($transaction);

            if (!$request->input('transaction')) {
                $transaction->delete();
            }
            DB::commit();

            return back()->with('message', 'Transaction complete');
        } catch (Exception $e) {
            DB::rollBack();
            return back()->with('error', $e->getMessage());
        }
    }
}

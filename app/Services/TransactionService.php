<?php

namespace App\Services;

use App\Dtos\MoneyDto;
use App\Enums\Status;
use App\Enums\TransactionType;
use App\Exceptions\CustomeException;
use App\Models\Asset;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;
use Exception;
use Illuminate\Support\Facades\DB;

class TransactionService
{
    public function create(string $type, Wallet $wallet, MoneyDto $amount, $description = null): Transaction
    {
        $transaction =  new Transaction;
        $transaction->fill([
            'user_id' => $wallet->user_id,
            'wallet_id' => $wallet->id,
            'type' => $type,
            'currency' => $amount->getCurrency(),
            'amount' => (string) $amount,
            'rate' =>  $amount->getRate(),
            'status' =>  Status::PENDING,
            'description' =>  $description,
        ]);

        $transaction->address = $transaction->type === $type ? $wallet?->asset->address : $wallet->address;

        $transaction->save();
        return $transaction;
    }

    public function deposit(Wallet $wallet, MoneyDto $amount, $desc = null): Transaction
    {
        return $this->create('deposit', $wallet, $amount, $desc ?? 'Deposit' . ' ' . $wallet->asset->name);
    }

    public function withdraw(Wallet $wallet, MoneyDto $amount, $desc = null): Transaction
    {

        if($wallet->balance->lessThan($amount)){
            throw new CustomeException('Not enough balance to proceed with transaction');
        }

        $amount  = MoneyDto::from(-1 * $amount->getAmount(), $amount->getCurrency());
        return $this->create('withdraw', $wallet, $amount, $desc ?? 'Withdraw' . ' ' . $wallet->asset->name);
    }

    public function resolve(Transaction $transaction)
    {
        if($transaction->status->isSuccess()) return;

        DB::transaction(function() use($transaction){
            $wallet = $transaction->wallet;
            $wallet->credit($transaction->amount);
            $this->approve($transaction);
            $wallet->save();
        });
    }

    public function approve(Transaction $transaction)
    {
        $transaction->status = Status::SUCCESS;
        $transaction->save();
    }
}

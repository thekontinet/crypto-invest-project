<?php

namespace App\Services;

use App\Dtos\MoneyDto;
use App\Enums\Status;
use App\Exceptions\CustomeException;
use App\Models\AutoProfit;
use App\Models\Investment;
use App\Models\Plan;
use Illuminate\Support\Facades\DB;

class InvestmentService
{
    public function __construct(private TransactionService $transactionService){}
    public function invest($plan, $wallet, MoneyDto $amount)
    {
        return DB::transaction(function() use($wallet, $plan, $amount){
            $transaction = $this->transactionService->withdraw($wallet, $amount, 'New investment');
            $this->transactionService->resolve($transaction);

            $investment = $wallet->user->investment;

            if(!$investment) return Investment::create([
                'user_id' => auth()->id(),
                'plan_id' => $plan->id,
                'currency' => $wallet->currency,
                'amount' => $amount,
                'profit' => 0,
                'rate' => 0,
                'status' => Status::OPEN,
                'end_date' => now()->addSeconds($plan->duration)
            ]);

            $this->upgrate($investment, $plan, $amount);
            return $investment;
        });
    }

    public function upgrate(Investment $investment, Plan $plan, MoneyDto $amount)
    {
        $investment->fill([
            'plan_id' => $plan->id,
            'currency' => $investment->currency,
            'amount' => $investment->amount->add($amount),
            'end_date' => now()->addSeconds($plan->duration)
        ]);

        $investment->save();
        return $investment;
    }

    public function withdraw(Investment $investment)
    {
        if($investment->status->isOpen()) throw new CustomeException('Withdrawal cannot be excecuted. trade is still active.');
        if($investment->status->isWithdrawn()) throw new CustomeException('inve$investment investment has already been withdrawn');

        $wallet = $investment->user->walletByCurrency($investment->currency);
        $transaction = $this->transactionService->deposit($wallet, $investment->total, 'Investment profit');
        $investment->status = Status::WITHDRAWN;
        $investment->save();
        return $transaction;
    }

    public function autoProfit(Investment $investment)
    {
        if(!$investment->profitIsDue() || !$investment->status->isOpen()) return;
        $amount = MoneyDto::from(rand(5, 40), $investment->currency);
        $investment->addProfit($amount);
    }

}

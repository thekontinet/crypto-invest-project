<?php

namespace App\Models\Traits;

use App\Models\Asset;
use App\Models\Wallet;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait HasWallet
{
    public function walletByCurrency($currency): Wallet
    {
        $wallet  = $this->wallets()->firstOrCreate(
            ['currency' => $currency],
            ['balance' => 0]
        );

        return $wallet;
    }

    public function balance(): Attribute
    {
        return new Attribute(
            get: fn() => $this->wallet->balance->format()
        );
    }

    public function wallet(): Attribute
    {
        return new Attribute(
            get: function(){
                $wallet = $this->wallets()->first();

                if(!$wallet){
                    $wallet = Wallet::create([
                        'user_id' => $this->id ?? auth()->id(),
                        'currency' => Asset::first()->symbol,
                        'balance' => 0
                    ]);
                }

                return $wallet;
            }
        );
    }


    public function wallets()
    {
        return $this->hasMany(Wallet::class);
    }
}

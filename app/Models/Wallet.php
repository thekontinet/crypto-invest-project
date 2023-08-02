<?php

namespace App\Models;

use App\Casts\MoneyCast;
use App\Dtos\MoneyDto;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address',
        'currency',
        'balance'
    ];

    protected $casts = [
        'balance' => MoneyCast::class
    ];

    public function credit(MoneyDto $amount)
    {
        $this->balance->add($amount);
        $this->save();
    }

    public function debit(MoneyDto $amount)
    {
        $this->balance->subtract($amount);
        $this->save();
    }

    public function asset()
    {
        return $this->hasOne(Asset::class, 'symbol', 'currency');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

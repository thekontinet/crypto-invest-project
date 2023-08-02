<?php

namespace App\Models;

use App\Casts\MoneyCast;
use App\Enums\Status;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'wallet_id',
        'type',
        'address',
        'currency',
        'amount',
        'rate',
        'description',
        'status'
    ];

    protected $casts = [
        'status' => Status::class,
        'amount' => MoneyCast::class
    ];

    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }
}

<?php

namespace App\Models;

use App\Casts\MoneyCast;
use App\Dtos\MoneyDto;
use App\Enums\Status;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'plan_id',
        'currency',
        'amount',
        'profit',
        'rate',
        'status',
        'end_date'
    ];

    protected $casts = [
        'amount' => MoneyCast::class,
        'profit' => MoneyCast::class,
        'status' => Status::class,
        'end_date' => 'datetime'
    ];

    public function scopeActive(Builder $q)
    {
        return $q->whereStatus(Status::OPEN);
    }

    public function scopeWithdrawn(Builder $q)
    {
        return $q->whereStatus(Status::WITHDRAWN);
    }

    public function total(): Attribute
    {
        return new Attribute(
            get: fn()=> MoneyDto::from($this->amount->getAmount() + $this->profit->getAmount(), $this->currency)
        );
    }

    public function addProfit(MoneyDto $money)
    {
        $this->profit->add($money);
        $this->rate = ($money->getAmount() / $this->amount->getAmount()) * 100;
        return $this->save();
    }

    public function profitIsDue()
    {
        if(!$this->plan->profit_interval) return;
        return now()->subSeconds($this->plan->profit_interval)->greaterThan($this->updated_at);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function asset()
    {
        return $this->hasOne(Asset::class, 'symbol', 'currency');
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}

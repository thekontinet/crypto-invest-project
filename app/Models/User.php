<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Casts\MoneyCast;
use App\Models\Traits\HasInvestment;
use App\Models\Traits\HasReferrals;
use App\Models\Traits\HasWallet;
use App\Observers\UserObserver;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens,
        HasFactory,
        Notifiable,
        HasWallet,
        HasInvestment,
        HasReferrals;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'country',
        'state',
        'is_admin',
        'is_blocked',
        'last_login_at',
        'refer_code',
        'refer_balance',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean',
        'is_blocked' => 'boolean',
        'password' => 'hashed',
        'refer_balance' => MoneyCast::class . ':USD',
    ];

    public function isAdmin()
    {
        return $this->is_admin;
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public static function booted()
    {
        static::observe(UserObserver::class);
    }
}

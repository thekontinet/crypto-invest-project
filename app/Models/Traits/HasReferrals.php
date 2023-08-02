<?php

namespace App\Models\Traits;

use App\Models\Referral;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait HasReferrals
{
    public function referLink(): Attribute
    {
        return new Attribute(
            get: fn() => route('register', ['ref' => $this->refer_code])
        );
    }
    public function downlines()
    {
        return $this->hasMany(Referral::class, 'sponsor_id');
    }

    public function sponsor()
    {
        return $this->hasOne(Referral::class);
    }
}

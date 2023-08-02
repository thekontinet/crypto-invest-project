<?php

namespace App\Models\Traits;

use App\Models\Investment;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait HasInvestment
{

    public function investment(): Attribute
    {
        return new Attribute(get:  fn() => $this->investments()->active()->latest()->first());
    }

    public function investments()
    {
        return $this->hasMany(Investment::class);
    }
}

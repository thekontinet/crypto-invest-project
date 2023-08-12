<?php

namespace App\Models;

use App\Casts\MoneyCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'profit_interval',
        'duration',
        'data'
    ];

    protected $casts = [
        'data' => 'array',
        'price' => MoneyCast::class . ':USD'
    ];
}

<?php

namespace App\Enums;

enum TransactionType: string{
    case SEND = 'send';
    case RECIEVE = 'recieve';

    public static function toArray()
    {
        return collect(static::cases())->pluck('value')->toArray();
    }
}

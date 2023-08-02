<?php

namespace App\Enums;

enum Status: int{
    case PENDING = 0;
    case SUCCESS = 1;
    case FAILED = 2;
    case OPEN = 3;
    case CLOSED = 4;
    case WITHDRAWN = 5;

    public function __call($method, $args)
    {
        $type = str($method)->replace('is', '')->upper();
        return $this === constant("self::$type");
    }

    // public function isSuccess()
    // {
    //     return $this === self::SUCCESS;
    // }

    // public function isPending()
    // {
    //     return $this === self::PENDING;
    // }

    // public function isFailed()
    // {
    //     return $this === self::FAILED;
    // }
}

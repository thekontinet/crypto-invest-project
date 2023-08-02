<?php

namespace App\Observers;

use App\Models\User;
use Nette\Utils\Random;

class UserObserver
{
    /**
     * Handle the User "creating" event.
     */
    public function creating(User $user): void
    {
        $user->refer_code = time() . Random::generate(4);
    }
}

<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class AuthenticateUser
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function handle(Registered $event)
    {
        $guard = Auth::guard(config(['sanctum.guard', 'api']));

        $guard->login($event->user);
    }
}

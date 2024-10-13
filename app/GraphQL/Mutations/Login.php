<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use GraphQL\Error\Error;
use Illuminate\Support\Facades\Auth;

class Login
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args): User
    {
        $guard = Auth::guard(config(['sanctum.guard', 'api']));
 
        if(!$guard->attempt($args)) {
            throw new Error('Invalid credentials.');
        }

        $user = $guard->user();

        return $user;
    }
    }

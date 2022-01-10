<?php

namespace App\Policies;

use App\Models\User as ModelsUser;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function viewOwnedBoards(ModelsUser $user, ModelsUser $viewer)
    {
        return $user->id == $viewer->id;
    }
}

<?php

namespace App\Policies;

use App\Card;
use App\Models\Card as ModelsCard;
use App\Models\User as ModelsUser;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CardPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(ModelsUser $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Card  $card
     * @return mixed
     */
    public function view(ModelsUser $user, ModelsCard $card)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(ModelsUser $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Card  $card
     * @return mixed
     */
    public function update(ModelsUser $user, ModelsCard $card)
    {
        return $user->id === $card->owner_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Card  $card
     * @return mixed
     */
    public function delete(ModelsUser $user, ModelsCard $card)
    {
        return $user->id === $card->owner_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Card  $card
     * @return mixed
     */
    public function restore(ModelsUser $user, ModelsCard $card)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Card  $card
     * @return mixed
     */
    public function forceDelete(ModelsUser $user, ModelsCard $card)
    {
        //
    }
}

<?php

namespace App\Policies;

use App\Models\CardList as ModelsCardList;
use App\Models\User as ModelsUser;
use Illuminate\Auth\Access\HandlesAuthorization;

class CardListPolicy
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
     * @param  \App\CardList  $cardList
     * @return mixed
     */
    public function view(ModelsUser $user, ModelsCardList $cardList)
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
     * @param  \App\CardList  $cardList
     * @return mixed
     */
    public function update(ModelsUser $user, ModelsCardList $cardList)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\CardList  $cardList
     * @return mixed
     */
    public function delete(ModelsUser $user, ModelsCardList $cardList)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\CardList  $cardList
     * @return mixed
     */
    public function restore(ModelsUser $user, ModelsCardList $cardList)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\CardList  $cardList
     * @return mixed
     */
    public function forceDelete(ModelsUser $user, ModelsCardList $cardList)
    {
        //
    }

    public function createCard(ModelsUser $user, ModelsCardList $cardList)
    {
        return $user->id === $cardList->board->owner_id;
    }
}

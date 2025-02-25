<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        // if($user->hasPermissionTo('View Posts')){
        //     return true;
        // }

        // return false;

        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        // if($user->hasPermissionTo('Create Posts')){
        //     return true;
        // }
        // return false;

         return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, User $model)
    {
        // if($user->hasRole('Admin') || $user->hasPermissionTo('Update Posts')){
        //     return true;
        // }
        // return false;

         return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user)
    {
        // if($user->hasRole('Super Admin')){
        //     return true;
        // }
        // return false;

         return true;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, User $model)
    {
        //
    }
}

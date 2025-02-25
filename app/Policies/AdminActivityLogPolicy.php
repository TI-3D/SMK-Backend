<?php

namespace App\Policies;

use App\Models\AdminActivityLog;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AdminActivityLogPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        if($user->hasPermissionTo('View Posts')){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, AdminActivityLog $adminActivityLog)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, AdminActivityLog $adminActivityLog)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, AdminActivityLog $adminActivityLog)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, AdminActivityLog $adminActivityLog)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, AdminActivityLog $adminActivityLog)
    {
        if($user->hasPermissionTo('Delete Posts')){
            return true;
        }
        return false;
    }
}

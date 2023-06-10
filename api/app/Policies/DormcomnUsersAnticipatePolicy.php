<?php

namespace App\Policies;

use App\Models\User;
use App\Models\dormcomn_users_anticipate;
use Illuminate\Auth\Access\Response;

class DormcomnUsersAnticipatePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, dormcomn_users_anticipate $dormcomnUsersAnticipate): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, dormcomn_users_anticipate $dormcomnUsersAnticipate): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, dormcomn_users_anticipate $dormcomnUsersAnticipate): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, dormcomn_users_anticipate $dormcomnUsersAnticipate): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, dormcomn_users_anticipate $dormcomnUsersAnticipate): bool
    {
        //
    }
}

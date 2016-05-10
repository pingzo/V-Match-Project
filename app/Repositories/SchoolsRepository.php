<?php

namespace App\SchoolsRepositories;

use App\User;

class SchoolsRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return $user->schools()
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}


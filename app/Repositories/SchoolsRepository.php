<?php

namespace App\Repositories;

use App\User;
use App\SchoolsProfile;

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
         return SchoolsProfile::where('users_id', $user->id)->get();
         /*return $user->schoolsprofile()
                    ->orderBy('asc')
                    ->get();*/
    }
}


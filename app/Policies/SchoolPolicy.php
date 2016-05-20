<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\User;
use App\SchoolsProfile;

class SchoolPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */  
    public function destroy(User $user, SchoolsProfile $school)
    {
        return $user->id === $school->users_id;
    }
}

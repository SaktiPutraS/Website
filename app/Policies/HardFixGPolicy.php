<?php

namespace App\Policies;

use App\Models\HardFixG;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class HardFixGPolicy
{
    use HandlesAuthorization;

    public function HardFixView(User $user, HardFixG $hardFixG)
    {
        return $user->isAdmin || $hardFixG->hard_fix_user_id == Auth::user()->id;
    }

    public function create(User $user)
    {
        //
    }

    public function HardFixUpdate(User $user, HardFixG $hardFixG)
    {
       return $user->isAdmin || $hardFixG->hard_fix_user_id ==  $user->id;

    }

    public function delete(User $user, HardFixG $hardFixG)
    {
        //
    }

}

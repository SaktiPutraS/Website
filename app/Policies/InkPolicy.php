<?php

namespace App\Policies;

use App\Models\InkReport;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class InkPolicy
{
    use HandlesAuthorization;

    public function InkView(User $user, InkReport $inkreport = null)
    {
        return $user->isAdmin || $inkreport->ink_user == Auth::user()->name;
    }

    public function create(User $user)
    {

    }

    public function InkUpdate(User $user, InkReport $inkreport)
    {
        return $user->isAdmin || $inkreport->ink_user ==  $user->id;
    }


    public function InkDelete(User $user, InkReport $inkreport)
    {
        return $user->isAdmin || Auth::user()->id == $inkreport->ink_user ;
    }

}

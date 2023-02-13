<?php

namespace App\Policies;

use App\Models\HardReq;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class HardReqPolicy
{
    use HandlesAuthorization;



    public function HardReqView(User $user, HardReq $hardReq)
    {
        return $user->isAdmin || $hardReq->hard_req_user_id == Auth::user()->id;
    }

    public function create(User $user)
    {
        //
    }

    public function HardReqUpdate(User $user, HardReq $hardReq)
    {
        return $user->isAdmin || $hardReq->hard_req_user_id ==  $user->id;
    }

}

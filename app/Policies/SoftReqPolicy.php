<?php

namespace App\Policies;

use App\Models\SoftReq;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class SoftReqPolicy
{
    use HandlesAuthorization;



    public function softReqView(User $user, SoftReq $softReq = null)
    {
        return $user->isAdmin || $softReq->soft_req_user_id == Auth::user()->id;
    }

    public function create(User $user)
    {

    }

    public function softUpdate(User $user, SoftReq $softReq)
    {
        return $user->isAdmin || $softReq->soft_req_user_id ==  $user->id;
    }


    public function softDelete(User $user, SoftReq $softReq)
    {
        return $user->isAdmin || Auth::user()->id == $softReq->soft_req_user_id ;
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class resetController extends Controller
{
    public function create(){
        return view('auth.auth-reset-password');
    }
    public function update(Request $request){
        // dd($request->email);
        DB::table('users')
        ->where('email',$request->email)
        ->update([
            'password'=> Hash::make($request->password)
        ]);
        return redirect()->route('login')->with('Status','Has been reset');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class procurementMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $divisi=$request->user()
        ->join('user_detail as ud','users.email','=','ud.email')
        ->select('ud.user_divisi')
        ->first();
        // Check if the user is an admin or belongs to a specific department
        // if ($divisi->user_divisi =='PROCUREMENT') {
        if ($divisi->user_divisi =='PROCUREMENT') {
            return $next($request);
        } elseif ($divisi->user_divisi =='IT'){
            return $next($request);
        }else {
            return response()->view('unauthorized', [], 401);
        }
    }
}

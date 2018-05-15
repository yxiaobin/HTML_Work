<?php

namespace App\Http\Middleware;

use App\Member;
use Closure;

class Adminmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(session('id')== -1){
            return redirect('/');
        }else{
            $member = Member::find(session('id'));
            if ($member->rank<1){
                return redirect('/');
                }
        }
        return $next($request);
    }
}

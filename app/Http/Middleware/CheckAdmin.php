<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    public function handle($request, Closure $next)
    {




        $user = Auth::user();


        if ($user->role != 2)
            return redirect('/');




        return $next($request);




    }
}

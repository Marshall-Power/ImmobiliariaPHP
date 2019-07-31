<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;

class CheckRole
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
        $user = Auth::user();

        if($user != NULL)
        {
            if ($user->usertype_id == 1)
            {
                return $next($request);
            }
            else if($user->usertype_id == 2)
            {
                return redirect('/');//esto deberia llevar al admin del agente
            }
        }
        else
        {
            return redirect('/');
        }

    }
}

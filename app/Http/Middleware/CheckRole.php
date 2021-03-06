<?php

namespace App\Http\Middleware;

use Closure;

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
        $user = $request->user();

        if ($user) {
            if ($user->usertype_id == 1) {
                return $next($request);
            } elseif ($user->usertype_id == 2) {
                $usersRoute = route('admin.users.index');
                $requestRoute = $request->url();
                if (starts_with($requestRoute, $usersRoute)) {
                    return redirect()->route('admin.index');
                } else {
                    return $next($request);
                }
            } else {
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
    }
}

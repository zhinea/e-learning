<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Role;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class AuthGates
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if (auth()->check()){

            $user = auth()->user();

            $roles            = Role::with('permissions')->get();
            $permissionsArray = [];

            foreach ($roles as $role) {
                foreach ($role->permissions as $permissions) {
                    $permissionsArray[$permissions->title][] = $role->id;
                }
            }


            // dd($permissionsArray);

            foreach ($permissionsArray as $title => $roles) {

                Gate::define($title, function ($user) use ($roles) {
                    return count(array_intersect($user->roles->pluck('id')->toArray(), $roles)) != 0;
                });
            }
        }


        return $next($request);
    }
}

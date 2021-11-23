<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\DB;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }

        if (auth()->user()->last_login_at->diffInHours(now()) !==0)
        {
            DB::table("users")
                ->where("id", auth()->user()->id)
                ->update(["last_online_at" => now()]);
        }

        return route('login');
    }
}

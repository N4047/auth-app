<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;

class EnsureEmailVerified
{
    public function handle($request, Closure $next)
    {
        $user = User::where('email', $request->all()['username'])->orWhere('username', $request->all()['username'])->first();

        if ($user && ($user->email_verified_at === null || $user->is_email_verified === 0)) {
            return redirect()->route('login')->withInput($request->all())->withErrors(['username' => __('validation.email_not_verified')]);

        } else {
            return $next($request);
        }
    }
}

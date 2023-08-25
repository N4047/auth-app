<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class OAuthController extends Controller
{
    public function callbackGoogle(): RedirectResponse|JsonResponse
    {
        try {
            $google_user = Socialite::driver('google')->stateless()->user();


            $user = User::firstOrCreate(
                ['email' => $google_user->getEmail()],
                [
                    'google_id'         => $google_user->getId(),
                    'username'          => $google_user->getName(),
                    'email_verified_at' => now(),
                    'is_email_verified' => 1
                ]
            );

            Auth::login($user);

            return redirect()->route('dashboard.index');
        } catch(\Throwable $th) {
            dd($th);
            return redirect()->back();
        }
    }
}

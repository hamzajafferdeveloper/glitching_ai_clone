<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Handle login logic
    }

    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            dd($googleUser);

            $user = User::where('google_id', $googleUser->id)->first();

            if (!$user) {
                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'avatar' => $googleUser->avatar,
                    'provider' => 'google',
                    'email_verified_at' => now(),
                ]);
            }

            Auth::login($user);

            return redirect('/dashboard');
        } catch (\Exception $e) {
            Log::error('Google Login Error: ' . $e->getMessage());
            return redirect('/auth/login')->withErrors('Unable to login using Google. Please try again.');
        }
    }

    public function register(Request $request)
    {

        try {
            $request->validate([
                'email'    => 'required|email|unique:users,email',
                'password' => 'required|min:6',
                'phone_number' => 'nullable|string|max:20',
            ]);

            $user = User::create([
                'email'             => $request->email,
                'password'          => Hash::make($request->password),
                'phone_number'      => $request->phone_number,
                'email_verified_at' => null,
            ]);

            Auth::login($user);

            return redirect('/dashboard');
        } catch (\Exception $e) {
            Log::error('Registration Error: ' . $e->getMessage());
            return redirect('/auth/sign-up')->withErrors('Registration failed. Please try again.');
        }
    }

    public function logout(Request $request)
    {
        // Handle logout logic
    }
}

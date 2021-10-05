<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\RateLimiter;


class LoginController extends Controller
{
    //
    public function authenticate(Request $request)
    {

        if (! Auth::attempt($this->only('phone', 'password'), $this->filled('remember'))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }


        RateLimiter::clear($this->throttleKey());
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials))
        {
            $request->session()->regenerate();

            if(auth()->user()->level == '1')
            {
                return redirect()->intended('/adminpage-dashboard');
            }
            else if(auth()->user()->level == '2')
            {
                return redirect()->intended('/siswapage-dashboard');
            }
        }

        return back()->withErrors([
            'email' => "The provided email address doesn't match our records.",
            'password' => "The provided password doesn't match our records."
        ])->onlyInput('email');
    }

    public function view()
    {
        return view('auth.login');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Mail\WelcomeMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthsController extends Controller
{
    public function loginForm()
    {
        return view ('admin.auth.login1');
    }

    public function login(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credential))
        {
            $request->session()->regenerate();

            return redirect()->to('/');
        }

        return redirect()->back()->withErrors('Incorrect Credential');
    }

    public function registerForm()
    {
        return view ('admin.auth.register');
    }

    public function register(Request $request)
    {
       $request->validate([
        'name' => 'required|string|min:2',
        'email' => 'required|unique:users',
        'password' => 'required|string|min:4|confirmed'

       ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        Mail::to($user->email)->send(new WelcomeMessage($user));

        return redirect()->to('/')->with('message', 'Greate you have successfully created account.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->to('/');
    }
}


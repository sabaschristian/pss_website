<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request) {
        //Validate
        $fields = $request->validate([
            'username' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'min: 6', 'confirmed'],
        ]);

        // Store fields
        $user = User::create($fields);

        //Login
        Auth::login($user);

        return redirect()->route('login');
    }

    public function login(Request $request) {
        //Validate
        $fields = $request->validate([
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required'],
        ]);

        //Login
        if(Auth::attempt($fields)){
            return redirect()->route('home');
        } else {
            return back()->withErrors(['failed', 'The provided credentials do not match our records.']);
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Logs user out
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', "You have been logged out");
    }

    // Returns login form
    public function login() {
        return view('auth.login');
    }

    // Authenticates and logs in user
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/pois')->with('message', "You are now logged in!");
        }

        return back()->withErrors(['name' => 'Invalid credentials'])->onlyInput('email');
    }
}

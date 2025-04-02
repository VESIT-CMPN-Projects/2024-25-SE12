<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        if ($request->input('action') === 'signup') {
            // Signup Logic
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|confirmed',
                'role' => 'required|in:admin,user', // Validate the role
                'terms' => 'required|accepted', // Validate terms checkbox
            ], [
                'terms.accepted' => 'You must accept the terms and conditions.',
            ]);

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password, //password will be hashed by model mutator.
                'role' => $request->role,
            ]);

            return redirect()->route('login')->with('success', 'Account created successfully! Please log in.');
        } else {
            // Login Logic
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);

            // Force redirection to home, even if authentication fails
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('home')->with('success', 'Login successful!');
            } else {
                return redirect()->route('home')->with('error', 'Login failed, but redirected to home.'); //added else statement to always redirect.
            }

        }
    }
}
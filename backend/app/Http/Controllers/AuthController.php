<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        // Determine if this is a login or signup request
        if ($request->has('signup')) {
            // Signup Logic
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8|confirmed',
                'terms' => 'accepted',
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user); // Automatically log in the user after signup
        } else {
            // Login Logic
            $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return back()->withErrors(['email' => 'Invalid credentials.']);
            }
        }

        // Redirect to homepage after login or signup
        return redirect()->route('home');
    }
}

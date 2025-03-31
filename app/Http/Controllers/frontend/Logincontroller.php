<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Logincontroller extends Controller
{
    public function login()
    {
        return view('frontend.login-and-register.login');
    }
    public function register()
    {
        return view('frontend.login-and-register.register');
    }
    public function authenticate(Request $request)
    {
        $allowedDomains = ['gmail.com', 'outlook.com', 'hotmail.com']; // List of allowed email domains

        // Custom validation rule for allowed email domains
        Validator::extend('allowed_domain', function ($attribute, $value, $parameters) {
            $emailDomain = substr(strrchr($value, "@"), 1); // Extract domain from email
            return in_array($emailDomain, $parameters); // Check if domain is in allowed list
        });

        // Validate the input data
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'allowed_domain:' . implode(',', $allowedDomains)], // Validate email domain
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->route('account.login')
                ->withErrors($validator)
                ->withInput($request->only('email'));
        }

        // Attempt authentication
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->filled('remember'))) {

            $user = Auth::user();

            // Check if the user has the role "customer"
            if ($user->role !== 'customer') {
                Auth::logout();
                return redirect()->route('account.login')->with('success', 'Logout successful.');
            } 

            // Redirect to intended URL or user profile
            return redirect()->intended(route('home'))->with('success', 'Login successful.');
        } else {
            return redirect()->route('account.login')->withErrors(['error' => 'Either E-mail or Password is incorrect.']);
        }
    }
    public function profile(Request $request)
    {
        $userId = Auth::user()->id;
        $user = User::where('id', $userId)->first();
        return view('frontend.profile', [
            'user'  =>$user,
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('home')->with('success', ' You have Successfully logout..! ');
    }

}

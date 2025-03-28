<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        // Allowed email domains for customers
        $allowedDomains = ['gmail.com', 'outlook.com', 'hotmail.com'];

        // Validate input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.login')
                ->withErrors($validator)
                ->withInput($request->only('email'));
        }

        // Attempt authentication
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            $user = Auth::user();

            // Apply domain check only if the user is a "customer"
            if ($user->role === 'customer') {
                $emailDomain = substr(strrchr($request->email, "@"), 1);
                if (!in_array($emailDomain, $allowedDomains)) {
                    Auth::logout(); // Logout the customer if the domain is not allowed
                    return redirect()->route('admin.login')->with('error', 'Only Gmail, Outlook, or Hotmail users can log in as customers.');
                }
            }

            // Redirect users based on role
            if ($user->role === 'Admin') {
                return redirect()->route('admin.dashboard'); // Admin dashboard
            } else {
                return redirect()->route('home'); // Customer home page
            }
        }

        return redirect()->route('admin.login')->with('error', 'Invalid Email or Password.');
    }

    public function registerUsers(Request $request)
    {
        // Allowed email domains for customers
        $allowedDomains = ['gmail.com', 'outlook.com', 'hotmail.com'];

        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|max:12',
            'role' => 'required|in:customer,Admin',  // Restrict role to "customer" or "Admin"
        ]);

        // If role is "customer", apply domain restriction
        if ($request->role === 'customer') {
            $emailDomain = substr(strrchr($request->email, "@"), 1);
            if (!in_array($emailDomain, $allowedDomains)) {
                return redirect()->back()->with('fail', 'Only Gmail, Outlook, or Hotmail users can register as customers.');
            }
        }

        // Create and save the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password), // Secure password hashing
        ]);

        // Check if the user was created successfully
        if ($user->wasRecentlyCreated) {
            return redirect()->back()->with('success', 'User registered successfully.');
        } else {
            return redirect()->back()->with('fail', 'User registration failed.');
        }
    }


    public function registration()
    {
        return view('admin.registration');
    }
}

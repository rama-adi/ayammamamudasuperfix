<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'is_admin' => false,
            'password' => Hash::make($request->get('password')),
        ]);

        Auth::login($user);

        return redirect()->route('homepage');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $request->get('email'))->first();

        if (!Hash::check($request->get('password'), $user->password)) {
            return redirect()->back()->withErrors([
                'password' => 'Password yang Anda masukkan salah.',
            ]);
        }

        Auth::login($user);

        return redirect()->route('homepage');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('homepage');
    }
}

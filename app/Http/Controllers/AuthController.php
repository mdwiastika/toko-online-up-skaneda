<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('admin.auth.login');
    }
    public function loginPost(Request $request)
    {
        $validatedData = $request->validate([
            'email' => ['email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();
            return redirect('/dashboard')->with('status', 'success')->with('message', `Selamat Datang` . auth()->user()->username);
        }
        return redirect('/login')->with('status', 'error')->with('message', 'Username atau password salah');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}

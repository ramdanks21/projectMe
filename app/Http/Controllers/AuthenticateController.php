<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function login(Request $request): RedirectResponse
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi',
        ]);

        // Coba melakukan otentikasi
        if (Auth::attempt($credentials)) {
            // Otentikasi berhasil, perbarui sesi dan redirect ke halaman yang dimaksud
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        // Otentikasi gagal, redirect ke halaman login dengan pesan error
        return redirect('/login')->withErrors(['email' => 'Email atau password salah']);
    }

    public function logout()
    {

        auth()->logout();
        return redirect('/login');

    }

    public function admin()
    {
        return view('dashboard.index');
    }
}

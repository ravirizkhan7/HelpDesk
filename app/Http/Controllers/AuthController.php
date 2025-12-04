<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.auth');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if (! $user->hasVerifiedEmail()) {
            Auth::logout();
            return redirect()->route('login')
                ->with('email', 'Silakan verifikasi email terlebih dahulu sebelum login.');
            }

            return redirect()->intended('dashboard')->with('success', 'Selamat datang kembali!');
        }

        return back()->withErrors([
            'email' => 'Maaf, email atau password yang Anda masukkan salah.',
        ])->onlyInput('email');
    }
    
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string',
        ]);

        // Buat user baru dengan role 'user'
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level_id' => 5, // Set role default sebagai 'user'
        ]);

        // Login sementara untuk kirim email verifikasi
        Auth::login($user);

        // Kirim email verifikasi
        $user->sendEmailVerificationNotification();

        // Arahkan ke halaman pemberitahuan
        return redirect()->route('verification.notice')
            ->with('success', 'Registrasi berhasil! Silakan cek email untuk verifikasi.');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Anda telah berhasil logout.');
    }
}

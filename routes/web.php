<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

// Route::get('/', function () {
    // return view('auth.auth');
    // return view('layout.app');
// });

Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'login')->name('login');
    Route::get('/login', 'login');
    Route::post('/login', 'auth')->name('login.proses');
    Route::post('/register', 'register')->name('register');
    Route::post('/logout', 'logout')->name('logout');
});

// Notifikasi setelah login tapi belum verifikasi
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

// Link verifikasi (dikirim via email)
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    // Setelah verifikasi sukses, arahkan ke halaman login
    return redirect()->route('login')
        ->with('success', 'Selamat datang! Email kamu sudah terverifikasi.');
})->middleware(['auth', 'signed'])->name('verification.verify');

// Resend link verifikasi
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Link verifikasi baru sudah dikirim ke email kamu!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::middleware(['level:user'])->group(function () {
    Route::get('/dashboard',[DashboardController::class, 'duser']);
});


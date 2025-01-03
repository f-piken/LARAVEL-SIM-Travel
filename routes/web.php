<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('product-landing');
});

Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin-dashboard', function () {
        return view('index');
    });
    //taro di sini klo punya admin
});

Route::middleware(['auth','role:karyawan'])->group(function () {
    Route::get('/karyawan-karyawan', function () {
        return view('dashboard');
    });
    //taro di sini kalo selain admin/karyawan
});
//buat role baru juga boleh

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::middleware('auth')->group(function () {
    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/login');
    })->name('logout');
});
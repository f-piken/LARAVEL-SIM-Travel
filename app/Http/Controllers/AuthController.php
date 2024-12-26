<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('username', 'password'))) {
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect('/admin-dashboard')->with('success', 'Welcome Admin!');
            } elseif ($user->role === 'mahasiswa') {
                return redirect('/karyawan-dashboard')->with('success', 'Welcome Karyawan!');
            }
        }

        return back()->withErrors(['login' => 'Username atau Password salah!']);
    }
    public function register()
    {

    }
}

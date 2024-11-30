<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\pegawai;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('MyEmployeeApp.register');
        }

        if ($request->isMethod('post')) {
            $request->validate([
                'nik' => 'required|numeric',
                'name' => 'required',
                'email' => 'required|email',
                'no_telp' => 'required|numeric',
                'password' => 'required',
                'confirm_password' => 'required|same:password'
            ]);

            $user = User::create([
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            pegawai::create([
                'nik' => $request->nik,
                'name' => $request->name,
                'no_telp' => $request->no_telp,
                'user_id' => $user->id
            ]);
    
            Auth::login($user);
            return redirect()->route('login');
        }
    }

    public function login(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('MyEmployeeApp.index');
        }

        if ($request->isMethod('post')) {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->route('dashboard');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->withInput($request->except('password'));
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}

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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\pegawai;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function show()
    {
        $users = Auth::User();
        $pegawai = $users->pegawai;
        return view('MyEmployeeApp.dashboard', compact('pegawai', 'users'));
    }
}

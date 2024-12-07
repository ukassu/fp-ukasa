<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\pegawai;
use App\Models\Absensi;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function show()
    {
        $users = Auth::User();
        $pegawai = $users->pegawai;
        return view('MyEmployeeApp.dashboard', compact('pegawai', 'users'));
    }

    public function absen()
    {
        $users = Auth::User();
        $absensi = $users->Absensi()->whereDate('tanggal', now()->toDateString())->first();

        if (!$absensi) {
            $users->Absensi()->create([
                'tanggal' => now()->toDateString(),
                'waktu_masuk' => now()->toTimeString(),
            ]);
        }

        return redirect()->route('dashboard');
    }

    public function pulang()
    {
        $users = Auth::User();
        $absensi = $users->Absensi()->whereDate('tanggal', now()->toDateString())->first();

        if ($absensi && !$absensi->waktu_keluar) {
            $absensi->update([
                'waktu_keluar' => now()->toTimeString(),
            ]);
        }

        return redirect()->route('dashboard');
    }
}

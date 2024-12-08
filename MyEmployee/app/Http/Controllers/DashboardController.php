<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\pegawai;
use App\Models\Absensi;
use App\Models\notifikasi;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function show()
    {
        $users = Auth::User();
        $pegawai = $users->pegawai;
        return view('MyEmployeeApp.dashboard', compact('pegawai', 'users'));
    }

    public function absen(Request $request)
    {
        $users = Auth::User();
        $pegawai = $users->pegawai;
        $absensi = $users->Absensi()->whereDate('tanggal', now()->toDateString())->first();

        if (!$absensi) {
            $users->Absensi()->create([
                'tanggal' => now()->toDateString(),
                'waktu_masuk' => now()->toTimeString(),
            ]);
            $time = now()->format('D, d M Y H:i:s');  
            $pesan = "{$pegawai->name} telah melakukan absen masuk pada {$time}";
            notifikasi::create([
                'pesan' => $pesan,
                'user_id' => $users->id,
            ]);
        }

        return redirect()->route('dashboard');
    }

    public function pulang()
    {
        $users = Auth::User();
        $absensi = $users->Absensi()->whereDate('tanggal', now()->toDateString())->first();
        $pegawai = $users->pegawai;
        if ($absensi && !$absensi->waktu_keluar) {
            $absensi->update([
                'waktu_keluar' => now()->toTimeString(),
            ]);
            $time = now()->format('D, d M Y H:i:s'); 
            $pesan = "{$pegawai->name} telah melakukan absen pulang pada {$time}";
            notifikasi::create([
                'pesan' => $pesan,
                'user_id' => $users->id,
            ]);
        }
        return redirect()->route('dashboard');
    }
}

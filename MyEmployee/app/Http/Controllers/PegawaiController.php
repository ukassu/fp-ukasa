<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('MyEmployeeApp.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(pegawai $pegawai)
    {
        $users = Auth::user(); 
        $pegawai = $users->pegawai; 
        return view('MyEmployeeApp.profil', compact('pegawai', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pegawai $pegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pegawai $pegawai)
    {
        $users = Auth::user();
        $pegawai = $users->pegawai;

        if (!$pegawai) {
            return redirect()->back()->withErrors('Data pegawai tidak ditemukan.');
        }

        // Validasi input
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'no_telp' => 'nullable|string|max:20',
        //     'asal_kota' => 'required|string|max:100',
        //     'tanggal_lahir' => 'required|date',
        //     'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        //     'alamat' => 'required|string|max:255',
        //     'posisi' => 'required|string|max:100',
        //     'email' => 'required|email|unique:users,email,' . $users->id,
        // ]);

        // Update data pegawai
        $pegawai->update([
            'name' => $request->name,
            'no_telp' => $request->no_telp,
            'asal_kota' => $request->asal_kota,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'posisi' => $request->posisi,
        ]);

        // Update email di tabel users
        $users->update([
            'email' => $request->email,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('profil')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pegawai $pegawai)
    {
        //
    }
}

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

        $pegawai->update([
            'name' => $request->has('name') ? $request->name : $pegawai->name,
            'no_telp' => $request->has('no_telp') ? $request->no_telp : $pegawai->no_telp,
            'email_pribadi' => $request->has('email_pribadi') ? $request->email_pribadi : $pegawai->email_pribadi,
            'asal_kota' => $request->has('asal_kota') ? $request->asal_kota : $pegawai->asal_kota,
            'tanggal_lahir' => $request->has('tanggal_lahir') ? $request->tanggal_lahir : $pegawai->tanggal_lahir,
            'jenis_kelamin' => $request->has('jenis_kelamin') ? $request->jenis_kelamin : $pegawai->jenis_kelamin,
            'alamat' => $request->has('alamat') ? $request->alamat : $pegawai->alamat,
            'posisi' => $request->has('posisi') ? $request->posisi : $pegawai->posisi,
        ]);

        $users->update([
            'email' => $request->has('email') ? $request->email : $users->email,
        ]);

        return redirect()->route('profil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pegawai $pegawai)
    {
        //
    }
}
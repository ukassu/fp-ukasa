<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $fillable = [
        'nik',
        'nama',
        'email',
        'no_telp',
        'password',
        'asal_kota',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'posisi',
    ];
    protected $hidden = [
        'password',
    ];
}

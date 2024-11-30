<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table = 'pegawais';
    protected $fillable = [
        'nik',
        'name',
        'no_telp',
        'asal_kota',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'posisi',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

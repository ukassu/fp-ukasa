<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = 'absensi';
    protected $fillable = ['tanggal', 'waktu_masuk', 'waktu_keluar', 'user_id'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}


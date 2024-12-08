<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class notifikasi extends Model
{
    protected $table = 'notifikasis';
    protected $fillable = ['pesan', 'user_id'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}

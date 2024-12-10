<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $table = 'tasks';
    protected $fillable = ['nama_tugas', 'deskripsi', 'is_completed', 'user_id'];
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}

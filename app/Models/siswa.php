<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = ['nis', 'nama', 'kelas', 'nohp'];

    public function peminjaman(){
        return $this->belongsToMany(peminjaman::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';

    protected $fillable = ['idpetugas', 'idsiswa', 'idbuku'];

    public function siswa(){
        return $this->belongsTo(siswa::class, 'idsiswa');
    }

    public function buku(){
        return $this->belongsTo(buku::class, 'idbuku');
    }

    public function petugas(){
        return $this->belongsTo(petugas::class, 'idpetugas');
    }
}

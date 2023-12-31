<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    protected $table = 'buku';

    protected $fillable = ['kodebuku', 'judul', 'pengarang', 'penerbit'];

    public function peminjaman(){
        return $this->hasMany(peminjaman::class);
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\buku;
use App\Models\peminjaman;
use App\Models\petugas;
use App\Models\siswa;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    public function index()
    {
        $pinjaman = peminjaman::all();
        return view('perpus.peminjaman', [
            'pinjaman' => $pinjaman
            ]);
    }

    public function tambah(){
        $pinjaman_siswa = siswa::all();
        $pinjaman_buku = buku::all();
        $pinjaman_petugas = petugas::all();
        $pinjaman = peminjaman::all();
        return view('perpus.peminjaman_tambah', [
            'pinjaman_siswa' => $pinjaman_siswa,
            'pinjaman_buku' => $pinjaman_buku,
            'pinjaman_petugas' => $pinjaman_petugas,
            'pinjaman' => $pinjaman
        ]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'idpetugas' => 'required',
            'idsiswa' => 'required',
            'idbuku' => 'required',
        ]);

        peminjaman::create([
            'idpetugas' => $request->idpetugas,
            'idsiswa' => $request->idsiswa,
            'idbuku' => $request->idbuku
        ]);

        return redirect('/peminjaman');
    }

    public function hapus($id){
        $pinjaman = peminjaman::find($id);
        $pinjaman->delete();

        return redirect('/peminjaman');
    }

    public function edit($id){
        $pinjaman_siswa = siswa::all();
        $pinjaman_buku = buku::all();
        $pinjaman_petugas = petugas::all();
        $pinjaman = peminjaman::find($id);
        return view('perpus.peminjaman_edit', [
            'pinjaman_siswa' => $pinjaman_siswa,
            'pinjaman_buku' => $pinjaman_buku,
            'pinjaman_petugas' => $pinjaman_petugas,
            'pinjaman' => $pinjaman
        ]);
    }

    public function update($id, Request $request){
        $this->validate($request, [
            'idpetugas' => 'required',
            'idsiswa' => 'required',
            'idbuku' => 'required',
        ]);

        $pinjaman = peminjaman::find($id);
        $pinjaman->idpetugas = $request->idpetugas;
        $pinjaman->idsiswa = $request->idsiswa;
        $pinjaman->idbuku = $request->idbuku;
        $pinjaman->save();

        return redirect('/peminjaman');
    }
}

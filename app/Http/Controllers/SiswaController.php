<?php

namespace App\Http\Controllers;
use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = siswa::all();
        return view('perpus.siswa', ['siswa' => $siswa]);
    }

    public function tambah(){
        return view('perpus.siswa_tambah');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'nohp' => 'required'
        ]);

        siswa::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'nohp' => $request->nohp
        ]);

        return redirect('/siswa');
    }

    public function edit($id){
        $siswa = siswa::find($id);
        return view('perpus.siswa_edit', ['siswa' => $siswa]);
    }

    public function update($id, Request $request){
        $this->validate($request, [
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'nohp' => 'required'
        ]);

        $siswa = siswa::find($id);
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
        $siswa->nohp = $request->nohp;
        $siswa->save();

        return redirect('/siswa');
    }

    public function hapus($id){
        $siswa = siswa::find($id);
        $siswa->delete();

        return redirect('/siswa');
    }
}

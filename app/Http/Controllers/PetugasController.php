<?php

namespace App\Http\Controllers;

use App\Models\petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
        $petugas = petugas::all();
        return view('perpus.petugas', ['petugas' => $petugas]);
    }

    public function tambah(){
        return view('perpus.petugas_tambah');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'nohp' => 'required'
        ]);

        petugas::create([
            'nama' => $request->nama,
            'nohp' => $request->nohp
        ]);

        return redirect('/petugas');
    }

    public function edit($id){
        $petugas = petugas::find($id);
        return view('perpus.petugas_edit', ['petugas' => $petugas]);
    }

    public function update($id, Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'nohp' => 'required'
        ]);

        $petugas = petugas::find($id);
        $petugas->nama = $request->nama;
        $petugas->nohp = $request->nohp;
        $petugas->save();

        return redirect('/petugas');
    }

    public function hapus($id){
        $petugas = petugas::find($id);
        $petugas->delete();

        return redirect('/petugas');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = buku::all();
        return view('perpus.buku', ['buku' => $buku]);
    }

    public function tambah(){
        return view('perpus.buku_tambah');
    }

    public function store(Request $request){
        $this->validate($request, [
            'kodebuku' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required'
        ]);

        buku::create([
            'kodebuku' => $request->kodebuku,
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit
        ]);

        return redirect('/buku');
    }

    public function edit($id){
        $buku = buku::find($id);
        return view('perpus.buku_edit', ['buku' => $buku]);
    }

    public function update($id, Request $request){
        $this->validate($request, [
            'kodebuku' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required'
        ]);

        $buku = buku::find($id);
        $buku->kodebuku = $request->kodebuku;
        $buku->judul = $request->judul;
        $buku->pengarang = $request->pengarang;
        $buku->penerbit = $request->penerbit;
        $buku->save();

        return redirect('/buku');
    }

    public function hapus($id){
        $buku = buku::find($id);
        $buku->delete();

        return redirect('/buku');
    }
}

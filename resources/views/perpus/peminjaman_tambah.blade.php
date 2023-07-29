@extends('perpus.main')
@section('title', 'Tambah Peminjaman')

@section('breadcrums')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Tambah Peminjaman</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="/">Dashboard</a></li>
                        <li><a href="/peminjaman">Peminjaman</a></li>
                        <li class="active">Tambah Peminjaman</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- .content -->
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="container">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <b>Tambah Peminjaman</b>
                    </div>
                    <div class="card-body">
                        <a href="/peminjaman" class="btn btn-primary">Kembali</a>
                        <br/>
                        <br/>

                        <form method="post" action="/peminjaman/store">

                            {{ csrf_field() }}

                            <div class="form-group row">
                                <label for="idpetugas" class="col-sm-4 col-form-label">Nama Petugas</label>
                                <div class="col-sm-8">
                                    <select type="text" class="form-control" id="idpetugas" name="idpetugas" placeholder="Pilih Nama Petugas">
                                        <option></option>
                                        @foreach($pinjaman_petugas as $pt)
                                            <option value="{{ $pt->id }}">{{ $pt->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <p>
                            <div class="form-group row">
                                <label for="idsiswa" class="col-sm-4 col-form-label">Nama Siswa</label>
                                <div class="col-sm-8">
                                    <select type="text" class="form-control" id="idsiswa" name="idsiswa" placeholder="Pilih Nama Siswa">
                                        <option></option>
                                        @foreach($pinjaman_siswa as $s)
                                            <option value="{{ $s->id }}">{{ $s->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <p>
                            <div class="form-group row">
                                <label for="idbuku" class="col-sm-4 col-form-label">Judul Buku</label>
                                <div class="col-sm-8">
                                    <select type="text" class="form-control" id="idbuku" name="idbuku" placeholder="Pilih Judul Buku">
                                        <option></option>
                                        @foreach($pinjaman_buku as $bk)
                                            <option value="{{ $bk->id }}">{{ $bk->judul }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Simpan">
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div>
    <!-- .content -->
@endsection

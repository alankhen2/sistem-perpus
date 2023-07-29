@extends('perpus.main')
@section('title', 'Edit Peminjaman')

@section('breadcrums')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Edit Peminjaman</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="/">Dashboard</a></li>
                        <li><a href="/peminjaman">Peminjaman</a></li>
                        <li class="active">Edit Peminjaman</li>
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
                        <b>Edit Peminjaman</b>
                    </div>
                    <div class="card-body">
                        <a href="/peminjaman" class="btn btn-primary">Kembali</a>
                        <br/>
                        <br/>

                        <form method="post" action="/peminjaman/update/{{ $pinjaman->id }}">

                            {{ csrf_field() }}
                            @method('PUT')

                            <p>
                            <div class="form-group row">
                                <label for="petugas" class="col-sm-4 col-form-label">Nama Petugas</label>
                                <div class="col-sm-8">
                                    <select type="text" class="form-control" id="idpetugas" name="idpetugas">
                                        @foreach ($pinjaman_petugas as $pt)
                                            @if ($pt->id == $pinjaman->idpetugas)
                                                <option value="{{ $pt->id }}" selected>{{ $pt->nama }}</option>
                                            @else
                                                <option value="{{ $pt->id }}">{{ $pt->nama }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <p>
                            <div class="form-group row">
                                <label for="siswa" class="col-sm-4 col-form-label">Nama Siswa</label>
                                <div class="col-sm-8">
                                    <select type="text" class="form-control" id="idsiswa" name="idsiswa">
                                        @foreach ($pinjaman_siswa as $s)
                                            @if ($s->id == $pinjaman->idsiswa)
                                                <option value="{{ $s->id }}" selected>{{ $s->nama }}</option>
                                            @else
                                                <option value="{{ $s->id }}">{{ $s->nama }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <p>
                            <div class="form-group row">
                                <label for="judul" class="col-sm-4 col-form-label">Judul Buku</label>
                                <div class="col-sm-8">
                                    <select type="text" class="form-control" id="idbuku" name="idbuku">
                                        @foreach ($pinjaman_buku as $bk)
                                            @if ($bk->id == $pinjaman->idbuku)
                                                <option value="{{ $bk->id }}" selected>{{ $bk->judul }}</option>
                                            @else
                                                <option value="{{ $bk->id }}">{{ $bk->judul }}</option>
                                            @endif
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

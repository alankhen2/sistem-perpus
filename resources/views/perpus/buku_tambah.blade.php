@extends('perpus.main')
@section('title', 'Tambah Buku')

@section('breadcrums')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Tambah Buku</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="/">Dashboard</a></li>
                        <li><a href="/buku">Buku</a></li>
                        <li class="active">Tambah Buku</li>
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
                        <b>Tambah Buku</b>
                    </div>
                    <div class="card-body">
                        <a href="/buku" class="btn btn-primary">Kembali</a>
                        <br/>
                        <br/>

                        <form method="post" action="/buku/store">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <label>Kode Buku</label>
                                <input type="text" name="kodebuku" class="form-control" placeholder="Kode Buku ..">

                                @if($errors->has('kodebuku'))
                                    <div class="text-danger">
                                        {{ $errors->first('kodebuku')}}
                                    </div>
                                @endif

                            </div>

                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="judul" class="form-control" placeholder="Judul ..">

                                @if($errors->has('judul'))
                                    <div class="text-danger">
                                        {{ $errors->first('judul')}}
                                    </div>
                                @endif

                            </div>

                            <div class="form-group">
                                <label>Pengarang</label>
                                <input type="text" name="pengarang" class="form-control" placeholder="Pengarang ..">

                                @if($errors->has('pengarang'))
                                    <div class="text-danger">
                                        {{ $errors->first('pengarang')}}
                                    </div>
                                @endif

                            </div>

                            <div class="form-group">
                                <label>Penerbit</label>
                                <input type="text" name="penerbit" class="form-control" placeholder="Penerbit ..">

                                @if($errors->has('penerbit'))
                                    <div class="text-danger">
                                        {{ $errors->first('penerbit')}}
                                    </div>
                                @endif

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

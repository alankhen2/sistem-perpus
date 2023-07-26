@extends('perpus.main')
@section('title', 'Tambah Siswa')

@section('breadcrums')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Tambah Siswa</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="/">Dashboard</a></li>
                        <li><a href="/siswa">Siswa</a></li>
                        <li class="active">Tambah Siswa</li>
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
                        <b>Tambah Siswa</b>
                    </div>
                    <div class="card-body">
                        <a href="/siswa" class="btn btn-primary">Kembali</a>
                        <br/>
                        <br/>

                        <form method="post" action="/siswa/store">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <label>NIS</label>
                                <input type="text" name="nis" class="form-control" placeholder="NIS ..">

                                @if($errors->has('nis'))
                                    <div class="text-danger">
                                        {{ $errors->first('nis')}}
                                    </div>
                                @endif

                            </div>

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama ..">

                                @if($errors->has('nama'))
                                    <div class="text-danger">
                                        {{ $errors->first('nama')}}
                                    </div>
                                @endif

                            </div>

                            <div class="form-group">
                                <label>Kelas</label>
                                <input type="text" name="kelas" class="form-control" placeholder="Kelas ..">

                                @if($errors->has('kelas'))
                                    <div class="text-danger">
                                        {{ $errors->first('kelas')}}
                                    </div>
                                @endif

                            </div>

                            <div class="form-group">
                                <label>No.HP</label>
                                <input type="text" name="nohp" class="form-control" placeholder="Nomor ..">

                                @if($errors->has('nohp'))
                                    <div class="text-danger">
                                        {{ $errors->first('nohp')}}
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

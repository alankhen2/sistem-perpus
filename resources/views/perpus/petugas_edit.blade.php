@extends('perpus.main')
@section('title', 'Edit Petugas')

@section('breadcrums')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Edit Petugas</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="/">Dashboard</a></li>
                        <li><a href="/petugas">Petugas</a></li>
                        <li class="active">Edit Petugas</li>
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
                        <b>Edit Petugas</b>
                    </div>
                    <div class="card-body">
                        <a href="/petugas" class="btn btn-primary">Kembali</a>
                        <br/>
                        <br/>

                        <form method="post" action="/petugas/update/{{ $petugas->id }}">

                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama .." value="{{ $petugas->nama }}">

                                @if($errors->has('kodebuku'))
                                    <div class="text-danger">
                                        {{ $errors->first('kodebuku')}}
                                    </div>
                                @endif

                            </div>

                            <div class="form-group">
                                <label>No.HP</label>
                                <input type="text" name="nohp" class="form-control" placeholder="NoHP .." value="{{ $petugas->nohp }}">

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

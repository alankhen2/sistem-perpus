@extends('perpus.main')
@section('title', 'Petugas')

@section('breadcrums')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Petugas</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="/">Dashboard</a></li>
                        <li class="active">Petugas</li>
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
                <div class="card mt-3">
                    <div class="card-header text-center">
                        <b>Olah Data Petugas</b>
                    </div>
                    <div class="card-body">
                        <a href="/petugas/tambah" class="btn btn-primary">Tambah Petugas Baru</a>
                        <br/>
                        <br/>
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>No.HP</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($petugas as $no=>$b)
                                <tr>
                                    <td>{{ $no+1 }}</td>
                                    <td>{{ $b->nama }}</td>
                                    <td>{{ $b->nohp }}</td>
                                    <td>
                                        <a href="/petugas/edit/{{ $b->id }}" class="btn btn-warning">Edit</a>
                                        <a href="/petugas/hapus/{{ $b->id }}" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div>
    <!-- .content -->
@endsection

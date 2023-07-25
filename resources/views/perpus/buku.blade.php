@extends('perpus.main')
@section('title', 'Buku')

@section('breadcrums')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Buku</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="/">Dashboard</a></li>
                        <li class="active">Buku</li>
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
                        <b>Olah Data Buku</b>
                    </div>
                    <div class="card-body">
                        <a href="/buku/tambah" class="btn btn-primary">Tambah Buku Baru</a>
                        <br/>
                        <br/>
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Kode Buku</th>
                                    <th>Judul</th>
                                    <th>Pengarang</th>
                                    <th>Penerbit</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($buku as $no=>$b)
                                <tr>
                                    <td>{{ $no+1 }}</td>
                                    <td>{{ $b->kodebuku }}</td>
                                    <td>{{ $b->judul }}</td>
                                    <td>{{ $b->pengarang }}</td>
                                    <td>{{ $b->penerbit }}</td>
                                    <td>
                                        <a href="/buku/edit/{{ $b->id }}" class="btn btn-warning">Edit</a>
                                        <a href="/buku/hapus/{{ $b->id }}" class="btn btn-danger">Hapus</a>
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

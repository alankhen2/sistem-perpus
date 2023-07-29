@extends('perpus.main')
@section('title', 'Peminjaman')

@section('breadcrums')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Peminjaman</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="/">Dashboard</a></li>
                        <li class="active">Peminjaman</li>
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
                        <b>Olah Data Peminjaman</b>
                    </div>
                    <div class="card-body">
                        <a href="/peminjaman/tambah" class="btn btn-primary">Tambah Peminjaman Baru</a>
                        <br/>
                        <br/>
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th>NO</th>
                                <th>Petugas</th>
                                <th>Siswa</th>
                                <th>Buku</th>
                                <th>Waktu Pinjam</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pinjaman as $no=>$b)
                                <tr>
                                    <td>{{ $no+1 }}</td>
                                    <td>{{ $b->petugas->nama }}</td>
                                    <td>{{ $b->siswa->nama }}</td>
                                    <td>{{ $b->buku->judul }}</td>
                                    <td>{{ $b->created_at }}</td>
                                    <td>
                                        <a href="/peminjaman/edit/{{ $b->id }}" class="btn btn-warning">Edit</a>
                                        <a href="/peminjaman/hapus/{{ $b->id }}" class="btn btn-danger">Hapus</a>
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

@extends('perpus.main')
@section('title', 'Dashboard')

@section('breadcrums')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
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
            <div class="col-md-4">
                <div class="feed-box text-center">
                    <section class="card">
                        <div class="card-body">
                            <a href="/buku">
                                <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="{{ asset('style/images/book_generated.jpg') }}">
                            </a>
                            <div class="text-center">
                                <h2>Buku</h2>
                                <p>Lihat dan Olah Data Buku</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feed-box text-center">
                    <section class="card">
                        <div class="card-body">
                            <a href="/siswa">
                                <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="{{ asset('style/images/person.png') }}">
                            </a>
                            <div class="text-center">
                                <h2>Siswa</h2>
                                <p>Lihat dan Olah Data Siswa</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feed-box text-center">
                    <section class="card">
                        <div class="card-body">
                            <a href="/petugas">
                                <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="{{ asset('style/images/person.png') }}">
                            </a>
                            <div class="text-center">
                                <h2>Petugas</h2>
                                <p>Lihat dan Olah Data Petugas</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feed-box text-center">
                    <section class="card">
                        <div class="card-body">
                            <a href="/peminjaman">
                                <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="{{ asset('style/images/book_generated.jpg') }}">
                            </a>
                            <div class="text-center">
                                <h2>Peminjaman</h2>
                                <p>Lihat dan Olah Data Peminjaman</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div><!-- .animated -->
    </div>
    <!-- .content -->
@endsection

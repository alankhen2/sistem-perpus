<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('perpus.dashboard');
});

/* ============== CRUD BUKU ============== */
Route::get('/buku', [\App\Http\Controllers\BukuController::class, 'index']);
Route::get('/buku/tambah', [\App\Http\Controllers\BukuController::class, 'tambah']);
Route::post('/buku/store', [\App\Http\Controllers\BukuController::class, 'store']);
Route::get('/buku/edit/{id}', [\App\Http\Controllers\BukuController::class, 'edit']);
Route::put('/buku/update/{id}', [\App\Http\Controllers\BukuController::class, 'update']);
Route::get('/buku/hapus/{id}', [\App\Http\Controllers\BukuController::class, 'hapus']);


Route::get('/siswa', function () {
    return view('perpus.siswa');
});

Route::get('/petugas', function () {
    return view('perpus.petugas');
});

Route::get('/peminjaman', function () {
    return view('perpus.peminjaman');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

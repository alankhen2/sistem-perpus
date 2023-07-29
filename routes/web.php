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


Route::get('/siswa', [\App\Http\Controllers\SiswaController::class, 'index']);
Route::get('/siswa/tambah', [\App\Http\Controllers\SiswaController::class, 'tambah']);
Route::post('/siswa/store', [\App\Http\Controllers\SiswaController::class, 'store']);
Route::get('/siswa/edit/{id}', [\App\Http\Controllers\SiswaController::class, 'edit']);
Route::put('/siswa/update/{id}', [\App\Http\Controllers\SiswaController::class, 'update']);
Route::get('/siswa/hapus/{id}', [\App\Http\Controllers\SiswaController::class, 'hapus']);

Route::get('/petugas', [\App\Http\Controllers\PetugasController::class, 'index']);
Route::get('/petugas/tambah', [\App\Http\Controllers\PetugasController::class, 'tambah']);
Route::post('/petugas/store', [\App\Http\Controllers\PetugasController::class, 'store']);
Route::get('/petugas/edit/{id}', [\App\Http\Controllers\PetugasController::class, 'edit']);
Route::put('/petugas/update/{id}', [\App\Http\Controllers\PetugasController::class, 'update']);
Route::get('/petugas/hapus/{id}', [\App\Http\Controllers\PetugasController::class, 'hapus']);

Route::get('/peminjaman', [\App\Http\Controllers\PinjamanController::class, 'index']);
Route::get('/peminjaman/tambah', [\App\Http\Controllers\PinjamanController::class, 'tambah']);
Route::post('/peminjaman/store', [\App\Http\Controllers\PinjamanController::class, 'store']);
Route::get('/peminjaman/hapus/{id}', [\App\Http\Controllers\PinjamanController::class, 'hapus']);
Route::get('/peminjaman/edit/{id}', [\App\Http\Controllers\PinjamanController::class, 'edit']);
Route::put('/peminjaman/update/{id}', [\App\Http\Controllers\PinjamanController::class, 'update']);






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

<?php

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
    return view('login');
});

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Admin Routes

Route::prefix('admin')->group(function () {
    // Dashboard Admin
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    //Tambah data siswa
    Route::get('/siswa', [App\Http\Controllers\Admin\SiswaController::class, 'index'])->name('admin.siswa');
    Route::get('/siswa/tambah', [App\Http\Controllers\Admin\SiswaController::class, 'create'])->name('admin.siswa.create');
    Route::post('/siswa', [App\Http\Controllers\Admin\SiswaController::class, 'store'])->name('admin.siswa.store');
    //ubah data siswa
    Route::get('/siswa/{id}/edit', [App\Http\Controllers\Admin\SiswaController::class, 'edit'])->name('admin.siswa.edit');
    Route::put('/siswa/{id}', [App\Http\Controllers\Admin\SiswaController::class, 'update'])->name('admin.siswa.update');
    //hapus data siswa
    Route::delete('/siswa/{id}', [App\Http\Controllers\Admin\SiswaController::  class, 'destroy'])->name('admin.siswa.destroy');
    //Detail Siswa
    Route::get('/siswa/{id}', [App\Http\Controllers\Admin\SiswaController::class, 'show'])->name('admin.siswa.show');
    //data guru
    Route::get('/guru', [App\Http\Controllers\Admin\GuruController::class, 'index'])->name('admin.guru');
    // Tambah data guru
    Route::get('/guru/tambah', [App\Http\Controllers\Admin\GuruController::class, 'create'])->name('admin.guru.create');
    Route::post('/guru', [App\Http\Controllers\Admin\GuruController::class, 'store'])->name('admin.guru.store');
    //ubah data guru
    Route::get('/guru/{id}/edit', [App\Http\Controllers\Admin\GuruController::class, 'edit'])->name('admin.guru.edit');
    Route::put('/guru/{id}', [App\Http\Controllers\Admin\GuruController::class, 'update'])->name('admin.guru.update');
    //hapus data guru
    Route::delete('/guru/{id}', [App\Http\Controllers\Admin\GuruController::class, 'destroy'])->name('admin.guru.destroy');
    //Data Kelas
    Route::get('/kelas', [App\Http\Controllers\Admin\KelasController::class, 'index'])->name('admin.kelas');
    Route::get('/kelas/tambah', [App\Http\Controllers\Admin\KelasController::class, 'create'])->name('admin.kelas.create');
    Route::post('/kelas', [App\Http\Controllers\Admin\KelasController::class, 'store'])->name('admin.kelas.store');
    Route::get('/kelas/{id}/edit', [App\Http\Controllers\Admin\KelasController::class, 'edit'])->name('admin.kelas.edit');
    Route::put('/kelas/{id}', [App\Http\Controllers\Admin\KelasController::class, 'update'])->name('admin.kelas.update');
    Route::delete('/kelas/{id}', [App\Http\Controllers\Admin\KelasController::class, 'destroy'])->name('admin.kelas.destroy');
    Route::get('/kelas/{id}', [App\Http\Controllers\Admin\KelasController::class, 'show'])->name('admin.kelas.show');
    
    //Data Mata Pelajaran
    Route::get('/mapel', [App\Http\Controllers\Admin\MapelController::class, 'index'])->name('admin.mapel');
    //Data Presensi
    Route::get('/presensi', [App\Http\Controllers\Admin\PresensiController::class, 'index'])->name('admin.presensi');
    //Data Laporan
    Route::get('/laporan', [App\Http\Controllers\Admin\LaporanController::class, 'index'])->name('admin.laporan');

});


//Guru Routes
Route::prefix('guru')->group(function ($role = 'guru') {
    Route::get('/dashboard', [App\Http\Controllers\Guru\DashboardController::class, 'index'])->name('guru.dashboard');
    Route::resource('/presensi', App\Http\Controllers\Guru\PresensiController::class);
    Route::resource('/laporan', App\Http\Controllers\Guru\LaporanController::class);
});
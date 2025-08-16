<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfilPimpinanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ArtikelController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/tentangkami', [App\Http\Controllers\TentangKamiController::class, 'index'])->name('tentangkami');

Route::get('/profilpimpinan', [ProfilPimpinanController::class, 'index'])->name('profil.pimpinan');

Route::get('/strukturorganisasi', function () {
    return view('strukturorganisasi');
})->name('strukturorganisasi');

Route::get('/tupoksi', function () {
    return view('tupoksi');
})->name('tupoksi');

Route::get('/maklumatpelayanan', function () {
    return view('maklumatpelayanan');
})->name('maklumatpelayanan');


Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');
Route::post('/berita/detail', [BeritaController::class, 'detail'])->name('berita.detail');

Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');

Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');

Route::get('/produk-hukum', function () {
    return view('produk-hukum');
})->name('produk-hukum');

Route::get('/dokumen-evaluasi', function () {
    return view('dokumen-evaluasi');
})->name('dokumen-evaluasi');

Route::get('/dokumen-perencanaan', function () {
    return view('dokumen-perencanaan');
})->name('dokumen-perencanaan');

// Route untuk halaman login admin
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Route untuk dashboard admin (hanya untuk admin yang sudah login)
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});
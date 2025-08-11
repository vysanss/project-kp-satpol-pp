<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/tentangkami', function () {
    return view('tentangkami');
})->name('tentangkami');

Route::get('/strukturorganisasi', function () {
    return view('strukturorganisasi');
})->name('strukturorganisasi');

Route::get('/tupoksi', function () {
    return view('tupoksi');
})->name('tupoksi');

Route::get('/maklumatpelayanan', function () {
    return view('maklumatpelayanan');
})->name('maklumatpelayanan');

Route::get('/profilpimpinan', function () {
    return view('profilpimpinan');
})->name('profilpimpinan');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');

Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');

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

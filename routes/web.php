<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfilPimpinanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PdfController;

Route::post('/upload-pdf', [PdfController::class, 'upload'])->name('pdf.upload');
Route::get('/pdf/{kategori}', [PdfController::class, 'list'])->name('pdf.list');
Route::get('/pdf/view/{nama}', [PdfController::class, 'show'])->name('pdf.show');
Route::get('/pdf/download/{id}', [PdfController::class, 'download'])->name('pdf.download');


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

// Route untuk halaman admin produk hukum
Route::get('/admin/produkhukum', [\App\Http\Controllers\Admin\PdfController::class, 'index'])->name('admin-produkhukum');
Route::post('/pdf/upload', [\App\Http\Controllers\Admin\PdfController::class, 'upload'])->name('pdf.upload');
Route::get('/admin/pdfs', [\App\Http\Controllers\Admin\PdfController::class, 'index'])->name('admin.pdfs.index');
Route::get('/admin', [\App\Http\Controllers\Admin\PdfController::class, 'index']);
Route::delete('/admin/pdf/{id}', [App\Http\Controllers\Admin\PdfController::class, 'delete'])->name('pdf.delete');
Route::put('/admin/pdf/{id}', [App\Http\Controllers\Admin\PdfController::class, 'update'])->name('pdf.update');
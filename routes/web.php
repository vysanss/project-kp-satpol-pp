<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfilPimpinanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\BeritaController; // Untuk frontend
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\Admin\BeritaController as AdminBeritaController; // Untuk admin




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

Route::get('/produk-hukum', [PdfController::class, 'produkHukum'])->name('produk-hukum');
Route::get('/pdf/download/{id}', [PdfController::class, 'download'])->name('pdf.download');

Route::get('/dokumen-evaluasi', [PdfController::class, 'dokumenEvaluasi'])->name('dokumen-evaluasi');

Route::get('/dokumen-perencanaan', [PdfController::class, 'dokumenPerencanaan'])->name('dokumen-perencanaan');

// Route untuk halaman login admin
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Route untuk dashboard admin (hanya untuk admin yang sudah login)
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    
});

// Route untuk halaman admin dokumen
Route::get('/admin/dokumen', [\App\Http\Controllers\Admin\PdfController::class, 'index'])->name('admin-dokumen');
Route::post('/pdf/upload', [\App\Http\Controllers\Admin\PdfController::class, 'upload'])->name('pdf.upload');
Route::get('/admin/pdfs', [\App\Http\Controllers\Admin\PdfController::class, 'index'])->name('admin.pdfs.index');
Route::get('/admin', function () {
    return redirect()->route('admin.login');
});
Route::delete('/admin/pdf/{id}', [App\Http\Controllers\Admin\PdfController::class, 'delete'])->name('pdf.delete');
Route::put('/admin/pdf/{id}', [App\Http\Controllers\Admin\PdfController::class, 'update'])->name('pdf.update');

// Admin Banner Routes
Route::prefix('admin')->name('admin.')->middleware(['auth:admin'])->group(function () {
    Route::resource('banners', App\Http\Controllers\Admin\BannerController::class);
    Route::get('banners/{banner}/toggle-status', [App\Http\Controllers\Admin\BannerController::class, 'toggleStatus'])->name('banners.toggle-status');
});

Route::get('/admin/banner', [App\Http\Controllers\Admin\BannerController::class, 'index'])->name('admin-banner')->middleware('auth:admin');

Route::prefix('admin')->middleware(['auth:admin'])->group(function () {
    Route::resource('berita', AdminBeritaController::class)->except(['show', 'create', 'edit']);
});

// Tambahkan route berikut untuk admin-berita
Route::get('/admin/berita', [AdminBeritaController::class, 'index'])->name('admin-berita')->middleware('auth:admin');
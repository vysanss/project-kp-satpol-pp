<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfilPimpinanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\BeritaController; // Untuk frontend
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\Admin\BeritaController as AdminBeritaController; // Untuk admin
use App\Http\Controllers\Admin\StrukturOrganisasiController as AdminStrukturOrganisasiController;
use App\Http\Controllers\MPelayananController;
use App\Http\Controllers\AdminMPelayananController;
use App\Http\Controllers\HomeController;




Route::get('/', [HomeController::class, 'index']);

Route::get('/tentangkami', [App\Http\Controllers\TentangKamiController::class, 'index'])->name('tentangkami');

Route::get('/profilpimpinan', [ProfilPimpinanController::class, 'index'])->name('profil.pimpinan');

Route::get('/strukturorganisasi', [\App\Http\Controllers\StrukturOrganisasiController::class, 'index'])->name('strukturorganisasi');

Route::get('/tupoksi', [\App\Http\Controllers\TupoksiController::class, 'index'])->name('tupoksi');

Route::get('/maklumatpelayanan', [MPelayananController::class, 'index'])->name('maklumatpelayanan');


Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');
Route::post('/berita/detail', [BeritaController::class, 'detail'])->name('berita.detail');

Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');

Route::get('/artikel', [BeritaController::class, 'artikel'])->name('artikel');
Route::post('/artikel/detail', [BeritaController::class, 'detail'])->name('artikel.detail');


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
    Route::resource('tentangkami', \App\Http\Controllers\AdminTentangKamiController::class, [
        'names' => [
            'index' => 'admin.tentangkami.index',
            'store' => 'admin.tentangkami.store',
            'update' => 'admin.tentangkami.update',
            'destroy' => 'admin.tentangkami.destroy',
            'show' => 'admin.tentangkami.show',
            'edit' => 'admin.tentangkami.edit',
            'create' => 'admin.tentangkami.create',
        ]
    ]);
    Route::get('strukturorganisasi', [AdminStrukturOrganisasiController::class, 'index'])->name('admin.strukturorganisasi.index');
    Route::post('strukturorganisasi', [AdminStrukturOrganisasiController::class, 'store'])->name('admin.strukturorganisasi.store');
    Route::put('strukturorganisasi/{id}', [AdminStrukturOrganisasiController::class, 'update'])->name('admin.strukturorganisasi.update');
    Route::delete('strukturorganisasi/{id}', [AdminStrukturOrganisasiController::class, 'destroy'])->name('admin.strukturorganisasi.destroy');
    Route::get('tupoksi', [\App\Http\Controllers\Admin\TupoksiController::class, 'index'])->name('admin.tupoksi.index');
    Route::post('tupoksi', [\App\Http\Controllers\Admin\TupoksiController::class, 'store'])->name('admin.tupoksi.store');
    Route::put('tupoksi/{id}', [\App\Http\Controllers\Admin\TupoksiController::class, 'update'])->name('admin.tupoksi.update');
    Route::delete('tupoksi/{id}', [\App\Http\Controllers\Admin\TupoksiController::class, 'destroy'])->name('admin.tupoksi.destroy');
    Route::get('pelayanan', [AdminMPelayananController::class, 'index'])->name('admin.pelayanan.index');
    Route::post('pelayanan', [AdminMPelayananController::class, 'store'])->name('admin.pelayanan.store');
    Route::put('pelayanan/{id}', [AdminMPelayananController::class, 'update'])->name('admin.pelayanan.update');
    Route::delete('pelayanan/{id}', [AdminMPelayananController::class, 'destroy'])->name('admin.pelayanan.destroy');
    Route::resource('profilpimpinan', \App\Http\Controllers\Admin\ProfilPimpinanController::class, [
        'names' => [
            'index' => 'admin.profilpimpinan.index',
            'store' => 'admin.profilpimpinan.store',
            'update' => 'admin.profilpimpinan.update',
            'destroy' => 'admin.profilpimpinan.destroy',
            'show' => 'admin.profilpimpinan.show',
            'edit' => 'admin.profilpimpinan.edit',
            'create' => 'admin.profilpimpinan.create',
        ]
    ]);
    Route::get('layanan', [\App\Http\Controllers\Admin\LayananController::class, 'index'])->name('admin.layanan.index');
    Route::post('layanan', [\App\Http\Controllers\Admin\LayananController::class, 'store'])->name('admin.layanan.store');
    Route::put('layanan/{id}', [\App\Http\Controllers\Admin\LayananController::class, 'update'])->name('admin.layanan.update');
    Route::delete('layanan/{id}', [\App\Http\Controllers\Admin\LayananController::class, 'destroy'])->name('admin.layanan.destroy');
    Route::get('footer', [\App\Http\Controllers\Admin\FooterController::class, 'index'])->name('admin.footer.index');
    Route::post('footer', [\App\Http\Controllers\Admin\FooterController::class, 'store'])->name('admin.footer.store');
    Route::put('footer/{id}', [\App\Http\Controllers\Admin\FooterController::class, 'update'])->name('admin.footer.update');
    Route::delete('footer/{id}', [\App\Http\Controllers\Admin\FooterController::class, 'destroy'])->name('admin.footer.destroy');
});

// Tambahkan route untuk admin-berita
Route::get('/admin/berita', [AdminBeritaController::class, 'index'])->name('admin-berita')->middleware('auth:admin');
// Add this route for CKEditor image upload
Route::post('/admin/berita/upload-image', [App\Http\Controllers\Admin\BeritaController::class, 'uploadImage'])->name('berita.upload-image');
// Tambahkan route untuk admin-footer
Route::get('/admin/footer', [\App\Http\Controllers\Admin\FooterController::class, 'index'])->name('admin-footer')->middleware('auth:admin');
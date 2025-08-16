<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;
use Carbon\Carbon;

class BeritaSeeder extends Seeder
{
    public function run()
    {
        $sampleNews = [
            ['title' => 'Operasi Tertib Satpol PP di Wilayah Pasar Tradisional', 'category' => 'Berita'],
            ['title' => 'Penyuluhan Perda tentang Ketertiban Umum', 'category' => 'Artikel'],
            ['title' => 'Pengawasan Pedagang Kaki Lima di Area Perkantoran', 'category' => 'Berita'],
            ['title' => 'Sosialisasi Peraturan Daerah Terbaru', 'category' => 'Produk Hukum'],
            ['title' => 'Evaluasi Kinerja Satpol PP Semester I', 'category' => 'Dokumen Evaluasi'],
            ['title' => 'Rencana Kerja Tahunan Satpol PP 2025', 'category' => 'Dokumen Perencanaan'],
            ['title' => 'Peningkatan Kapasitas SDM Satpol PP', 'category' => 'Berita'],
            ['title' => 'Koordinasi dengan Instansi Terkait', 'category' => 'Artikel'],
            ['title' => 'Pemeliharaan Keamanan dan Ketertiban', 'category' => 'Berita']
        ];

        foreach ($sampleNews as $i => $news) {
            Berita::create([
                'title' => $news['title'],
                'category' => $news['category'],
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
                'image' => null,
                'published_at' => Carbon::now()->subDays($i + 1),
            ]);
        }
    }
}

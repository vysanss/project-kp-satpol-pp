<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    public function run()
    {
        Banner::create([
            'judul' => 'SATPOL PP',
            'sub_judul' => 'Kota Tasikmalaya',
            'deskripsi' => 'Satuan Polisi Pamong Praja Kota Tasikmalaya menjaga ketertiban, keamanan, dan kenyamanan masyarakat dengan integritas dan profesionalisme.',
            'logo' => 'img/logo-Pol-PP-png.webp',
            'logo_alt' => 'Logo Satpol PP Tasikmalaya',
            'show_logo' => true,
            'show_navigation' => true,
            'show_stats' => true,
            'navigation_items' => [
                [
                    'url' => '/tentangkami',
                    'label' => 'Tentang Kami',
                    'icon' => 'M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
                ],
                [
                    'url' => '/layanan',
                    'label' => 'Layanan Publik',
                    'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'
                ],
                [
                    'url' => '/berita',
                    'label' => 'Berita Terkini',
                    'icon' => 'M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z'
                ],
                [
                    'url' => '#',
                    'label' => 'Kontak Kami',
                    'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'
                ]
            ],
            'stats' => [
                ['value' => '20+', 'label' => 'Tahun Melayani'],
                ['value' => '150+', 'label' => 'Personil Aktif'],
                ['value' => '10', 'label' => 'Kecamatan'],
                ['value' => '69', 'label' => 'Kelurahan']
            ],
            'is_active' => true
        ]);
    }
}

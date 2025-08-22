<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tupoksi;

class TupoksiSeeder extends Seeder
{
    public function run()
    {
        Tupoksi::insert([
            [
                'kategori' => 'Tugas Pokok',
                'poin' => 'Penegakan Perda',
                'isi' => 'Melaksanakan penegakan Peraturan Daerah dan Peraturan Kepala Daerah.'
            ],
            [
                'kategori' => 'Tugas Pokok',
                'poin' => 'Ketertiban Umum',
                'isi' => 'Menjaga ketertiban umum dan ketenteraman masyarakat.'
            ],
            [
                'kategori' => 'Tugas Pokok',
                'poin' => 'Perlindungan Masyarakat',
                'isi' => 'Memberikan perlindungan kepada masyarakat dari gangguan keamanan.'
            ],
            [
                'kategori' => 'Fungsi',
                'poin' => 'Fungsi Utama',
                'isi' => 'Pelaksanaan penegakan Perda, penyelenggaraan ketertiban umum, perlindungan masyarakat.'
            ],
            [
                'kategori' => 'Fungsi',
                'poin' => 'Fungsi Pendukung',
                'isi' => 'Koordinasi dengan instansi terkait, sosialisasi, pembinaan masyarakat.'
            ],
            [
                'kategori' => 'Bidang Kerja',
                'poin' => 'Perizinan',
                'isi' => 'Pengawasan dan penertiban perizinan usaha dan kegiatan masyarakat.'
            ],
            [
                'kategori' => 'Bidang Kerja',
                'poin' => 'Ketertiban',
                'isi' => 'Penanganan pelanggaran ketertiban umum di wilayah kerja.'
            ],
            [
                'kategori' => 'Bidang Kerja',
                'poin' => 'Penyuluhan',
                'isi' => 'Penyuluhan kepada masyarakat tentang pentingnya ketertiban dan keamanan.'
            ],
            [
                'kategori' => 'Bidang Kerja',
                'poin' => 'Pengawasan',
                'isi' => 'Pengawasan pelaksanaan Perda dan Peraturan Kepala Daerah.'
            ],
        ]);
    }
}

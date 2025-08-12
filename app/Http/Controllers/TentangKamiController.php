<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TentangKami;

class TentangKamiController extends Controller
{
    public function index()
    {
        $tentangkami = TentangKami::first();
        
        // Default data if no record found in database
        if (!$tentangkami) {
            $tentangkami = (object) [
                'judul' => 'Profil Organisasi',
                'deskripsi_1' => 'Satuan Polisi Pamong Praja Kota Tasikmalaya adalah perangkat daerah yang bertugas dalam penegakan Peraturan Daerah dan Peraturan Kepala Daerah, penyelenggaraan ketertiban umum dan ketentraman, serta perlindungan masyarakat.',
                'deskripsi_2' => 'Kami berkomitmen memberikan pelayanan terbaik dengan mengedepankan integritas, profesionalisme, dan dedikasi tinggi untuk menciptakan lingkungan yang aman, tertib, dan nyaman bagi seluruh masyarakat Kota Tasikmalaya.',
                'gambar' => null,
                'visi' => 'Terwujudnya Kota Tasikmalaya yang aman, tertib, dan tentram melalui penegakan Perda yang konsisten dan pelayanan prima kepada masyarakat.',
                'misi' => [
                    'Melaksanakan penegakan Perda dan Perkada secara konsisten',
                    'Menjaga ketertiban umum dan ketentraman masyarakat',
                    'Memberikan perlindungan kepada masyarakat',
                    'Meningkatkan kualitas pelayanan publik'
                ]
            ];
        }
        
        return view('tentangkami', compact('tentangkami'));
    }
}

<?php

namespace Database\Seeders;

use App\Models\ProfilPimpinan;
use Illuminate\Database\Seeder;

class ProfilPimpinanSeeder extends Seeder
{
    public function run()
    {
        ProfilPimpinan::create([
            'nama' => 'Lorem Ipsum',
            'gelar_depan' => 'Dr.',
            'gelar_belakang' => 'S.H., M.H.',
            'jabatan' => 'Kepala Satuan Polisi Pamong Praja Kota Tasikmalaya',
            'pesan' => 'Satuan Polisi Pamong Praja Kota Tasikmalaya berkomitmen untuk terus meningkatkan pelayanan kepada masyarakat dengan menjunjung tinggi nilai-nilai integritas, profesionalisme, dan dedikasi dalam menegakkan ketertiban umum dan ketentraman masyarakat.',
            'foto' => null,
            'is_active' => true,
            'urutan' => 1
        ]);
    }
}

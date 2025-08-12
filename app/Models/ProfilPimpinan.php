<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilPimpinan extends Model
{
    use HasFactory;

    protected $table = 'profilpimpinan';

    protected $fillable = [
        'nama',
        'gelar_depan',
        'gelar_belakang',
        'jabatan',
        'pesan',
        'foto',
        'is_active',
        'urutan'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function getNamaLengkapAttribute()
    {
        $nama = '';
        if ($this->gelar_depan) {
            $nama .= $this->gelar_depan . ' ';
        }
        $nama .= $this->nama;
        if ($this->gelar_belakang) {
            $nama .= ', ' . $this->gelar_belakang;
        }
        return $nama;
    }

    public function getFotoUrlAttribute()
    {
        return $this->foto ? asset('storage/' . $this->foto) : asset('img/placeholder-leader.jpg');
    }
}

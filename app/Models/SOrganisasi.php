<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SOrganisasi extends Model
{
    use HasFactory;

    protected $table = 's_organisasi';

    protected $fillable = [
        'nama_jabatan',
        'nama_pejabat',
        'foto',
        'deskripsi',
    ];
}

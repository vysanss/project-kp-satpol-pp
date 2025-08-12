<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangKami extends Model
{
    use HasFactory;

    protected $table = 'tentangkami';

    protected $fillable = [
        'judul',
        'deskripsi_1',
        'deskripsi_2',
        'gambar',
        'visi',
        'misi'
    ];

    protected $casts = [
        
    ];
}

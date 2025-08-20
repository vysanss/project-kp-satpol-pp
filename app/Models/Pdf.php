<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama_file',
        'path',
        'ukuran_file',
        'tipe_file',
        'kategori',
    ];
    
    protected $dates = [
        'created_at',
        'updated_at'
    ];
}

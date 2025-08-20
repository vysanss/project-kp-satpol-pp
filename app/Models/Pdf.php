<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama_file',
        'file_path',
        'ukuran_file',
        'tipe_file'
    ];
    
    protected $dates = [
        'created_at',
        'updated_at'
    ];
}

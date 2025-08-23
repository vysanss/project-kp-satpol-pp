<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $fillable = [
        'deskripsi', 
        'layanan',
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    // Scope untuk footer aktif

}

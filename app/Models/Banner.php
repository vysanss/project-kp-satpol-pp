<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'sub_judul',
        'deskripsi',
        'logo',
        'logo_alt',
        'show_logo',
        'show_navigation',
        'show_stats',
        'navigation_items',
        'stats',
        'is_active'
    ];

    protected $casts = [
        'show_logo' => 'boolean',
        'show_navigation' => 'boolean',
        'show_stats' => 'boolean',
        'navigation_items' => 'array',
        'stats' => 'array',
        'is_active' => 'boolean'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}

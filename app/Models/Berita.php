<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';

    protected $fillable = [
        'title', 'category', 'content', 'image', 'published_at'
    ];

    protected $dates = ['published_at'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MPelayanan extends Model
{
    protected $table = 'm_pelayanan';
    protected $fillable = ['kategori', 'poin', 'isi'];
}

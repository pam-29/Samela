<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    protected $fillable = [
        'title',
        'singer',
        'audio',
        'lyrics',
        'photo',
        'category',
    ];
}

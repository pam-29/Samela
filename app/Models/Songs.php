<?php

namespace App\Models;
use App\Models\Singers;
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
        'singer_id',
    ];

    public function singer(){
        return $this->belongsTo(Singers::class, 'singer_id');
    }
}

<?php

namespace App\Models;
use App\Models\Songs;

use Illuminate\Database\Eloquent\Model;

class Singers extends Model
{
    protected $fillable=[
        'name',
    ];
    
    public function songs(){
        return $this->hasMany(Songs::class, 'singer_id');
    }
}

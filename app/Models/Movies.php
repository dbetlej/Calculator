<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Database\Factories\MoviesFactory;

class Movies extends Model
{
    use HasFactory;

    protected $table = 'movies';
    public $incrementing = true;
    public $timestamps = true;
    
    protected $attributes = [
        'name' => false,
        'url' => false,
        'favourite' => 0,
        'watched' => 0,       
        'series' => null,
        'created_at' => false,
        'updated_at' => false
    ];
}

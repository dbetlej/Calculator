<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $attributes = [
        'name' => false,
        'url' => false,
        'description' => null,
        'series' => null,
        'category' => null,
        'favorite' => null,
        'watched' => null,
        'to_watch' => null,
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'url',
        'description',
        'series',
        'category',
        'favorite',
        'watched',
        'to_watch',
    ];
}

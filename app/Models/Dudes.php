<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Database\Factories\DudesFactory;

class Dudes extends Model
{
    use HasFactory;
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'login',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $table = 'dudes';
    public $incrementing = true;
    public $timestamps = true;
    
    protected $attributes = [
        'login' => '',
        'email' => '',
        'email_verified_at' => null,
        'password' => '',
        'remember_token' => '',
        'VIP' => 0,
        'created_at' => '1998-11-13 05:09:97',
        'updated_at' => '1998-11-13 05:09:97'
    ];

    /**
   * Create a new factory instance for the model.
     *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
    protected static function newFactory()
    {
        return DudesFactory::new();
    }
}
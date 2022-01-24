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
        'email_verified_at' => '',
        'password' => '',        
        'remember_token' => '',
        'VIP' => 0,
        'created_at' => '1998-11-13 05:09:97',
        'updated_at' => '1998-11-13 05:09:97'
    ];

    public function create_user(string $login, string $email, string $password, int $VIP){
        return DB::table('dudes')->insertGetId([
            'login' => $login,
            'email' => $email,
            'password' => $password,
            'VIP' => $VIP,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }

    public function chk_email(string $email){
        return DB::table('dudes')->where('email', 'LIKE', $email)->first();
    }
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
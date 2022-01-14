<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dudes extends Model
{
    use HasFactory;
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

}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Movies extends Model
{
    use HasFactory;

    public function add_movie(string $name, string $url, bool $favourite, bool $watched){
        return DB::table('movies')->insertGetId([
            'name' => $name,
            'url' => $url,
            'favourite' => $favourite,
            'watched' => $watched,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }

    public function update_movie(string $name, string $url, bool $favourite, bool $watched, int $id){
        return DB::table('movies')->where('id', $id)->update([
            'name' => $name,
            'url' => $url,
            'favourite' => $favourite,
            'watched' => $watched,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }

    public function get(int $id){
        return DB::table('movies')->where('id', $id)->first();
    }

    public function get_all(){
        return DB::table('movies')->get();
    }

    public function delete_movie(int $id){
        return DB::table('movies')->where('id', $id)->delete();
    }
}

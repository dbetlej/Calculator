<?php

namespace App\Repositories;

use App\Models\Dudes;
use Illuminate\Support\Facades\Hash;

class UserRepository {

    private $model;

    public function __construct()
    {
        $this->model = new Dudes();
    }

    public function create(array $payload): bool
    {
        $tempPass = Hash::make($payload['password']);
        
        $dude = $this->model->factory()->create([
            'login' => ucfirst($payload['login']),
            'email' => $payload['email'],
            'password' => $tempPass,        
        ]);

        return true;
    }

    public function update(int $movieId, array $payload): bool
    {
        DB::table('movies')
            ->where('id', $movieId)
            ->update($payload);

        return true;
    }

    public function delete(int $movieId): bool
    {
        $movie = Movies::find($movieId);
        $movie->delete();

        return true;
    }
}